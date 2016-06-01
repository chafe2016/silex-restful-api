<?php

require_once __DIR__.'/vendor/autoload.php'; 

function csvToArray($file, $delimiter) { 
    if (($handle = getFilePart(fopen($file, 'r'), 20)) !== FALSE) { 
        $i = 0; 
        while (($lineArray = fgetcsv($handle, 4000, $delimiter, '"')) !== FALSE) {
            for ($j = 0; $j < count($lineArray); $j++) {
                $arr[$i][$j] = $lineArray[$j];
            } 
            $i++; 
        } 
        fclose($handle); 
    } 
    return $arr;
}

function arrayToJson($array){
    $json_out = []; // Saída em JSON
    $document = []; // Cada elemento do JSON final
    $json_indexes = ["SOLICITACAO","TIPO","ORGAO","DATA","HORARIO","ASSUNTO","SUBDIVISAO","DESCRICAO","LOGRADOURO_ASS",
        "BAIRRO_ASS","REGIONAL_ASS","MEIO_RESPOSTA","OBSERVACAO","SEXO","BAIRRO_CIDADAO","REGIONAL_CIDADAO","DATA_NASC",
        "TIPO_CIDADAO","ORGAO_RESP","RESPOSTA_FINAL"]; // Conjunto de chaves de cada documento do JSON
    foreach ($array as $line) {
        foreach ($line as $index => $cell) {
            $document[$json_indexes[$index]] = $cell; // Adiciona a célula do CSV à sua respectiva chave no documento
        }
        array_push($json_out, $document); // Adiciona o documento ao JSON
    }
    
    return $json_out;
}

function getFilePart($file, $lines){
    $new_file = tmpfile(); 
    if($file){
        $i = 0;
        while ($i <= $lines) {
            $line = utf8_encode(fgets($file)); // Pega linha por linha do CSV
            if($i >= 2) // Ignora as 2 primeiras linhas do CSV (título e uma outra linha de lixo)
                fwrite($new_file, $line); // Escreve a linha para o arquivo temporário
            $i++;
        }
    } 
    else {
        return false;
    }
    fseek($new_file, 0); // Necessário pro arquivo poder ser exportado
    return $new_file;
}

$app = new Silex\Application(); 

$app['debug'] = true;

$app->get('/', function() use($app) { 
    return 'Hello World'; 
}); 

$app->get('/hello/{name}', function($name) use($app) { 
    return 'Hello '.$app->escape($name); 
}); 

$app->get('/api/dados156', function() use($app) {
    $json = csvToArray(getcwd() . "/data/dados156_simples.csv", ";");
    return $app->json(arrayToJson($json));
}); 

$app->run(); 