<?php

function parseCSV($url){
    return csvToJson(fopen($url, "r"), ";");
}

function csvToJson($file, $delimiter) {
    if (($handle = getFilePart($file, 2, 20)) !== FALSE) {
        $i = 0;
        while (($lineArray = fgetcsv($handle, 4000, $delimiter, '"')) !== FALSE) {
            for ($j = 0; $j < count($lineArray); $j++) {
                $arr[$i][$j] = $lineArray[$j];
            }
            $i++;
        }
        fclose($handle);
    }
    
    return arrayToJson($arr);
}

function arrayToJson($array){
    $json_out = []; // Saída em JSON
    $document = []; // Cada elemento do JSON final
    $json_indexes = ["SOLICITACAO","TIPO","ORGAO","DATA","HORARIO","ASSUNTO","SUBDIVISAO","DESCRICAO","LOGRADOURO_ASS",
        "BAIRRO_ASS","REGIONAL_ASS","MEIO_RESPOSTA","OBSERVACAO","SEXO","BAIRRO_CIDADAO","REGIONAL_CIDADAO","DATA_NASC",
        "TIPO_CIDADAO","ORGAO_RESP","RESPOSTA_FINAL"]; // Conjunto de chaves de cada documento do JSON
    foreach ($array as $line) {
        foreach ($line as $index => $cell) {
            $document[$json_indexes[$index]] = trataCelula($cell); // Adiciona a célula do CSV à sua respectiva chave no documento
        }
        array_push($json_out, $document); // Adiciona o documento ao JSON
    }

    return $json_out;
}

function getFilePart($file, $start, $end){
    $new_file = tmpfile();
    if($file){
        $i = 0;
        while ($i <= $end) {
            $line = fgets($file); // Pega linha por linha do CSV
            if($i >= $start) // Passa a pegar as linhas a partir de $start
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

function trataCelula($string){
    return str_replace("\n", " ", utf8_encode(trim($string)));
}
