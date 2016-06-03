<?php

function parseCSV($url, $headers, $start){
    $csv = csvToArray(fopen($url, "r"), ";", $start);
    return arrayToJson($csv, $headers);
}

function csvToArray($file, $delimiter, $start) {
    if (($handle = getFilePart($file, $start, 1)) !== FALSE) {
        $i = 0;
        while (($lineArray = fgetcsv($handle, 0, $delimiter, '"')) !== FALSE) {
            for ($j = 0; $j < count($lineArray); $j++) {
                $arr[$i][$j] = $lineArray[$j];
            }
            $i++;
        }
        fclose($handle);
    }
    
    return $arr;
}

function arrayToJson($array, $headers){
    $json_out = []; // Saída em JSON
    $document = []; // Cada elemento do JSON final
    foreach ($array as $line) {
        foreach ($line as $index => $cell) {
            $document[$headers[$index]] = $cell; // Adiciona a célula do CSV à sua respectiva chave no documento
        }
        array_push($json_out, $document); // Adiciona o documento ao JSON
    }

    return $json_out;
}

function getFilePart($file, $start, $lines){
    $new_file = tmpfile();
    $end = $start + $lines - 1;
    if($file){
        $i = 0;
        while ($i <= $end) {
            $line = fgets($file); // Pega linha por linha do CSV
            if($i >= $start){ // Passa a pegar as linhas a partir de $start
                fwrite($new_file, trataCelula($line)); // Escreve a linha tratada para o arquivo temporário
            }
            $i++;
        }
    }
    else {
        return false;
    }
    fseek($new_file, 0); // Necessário pro arquivo poder ser exportado
    // file_put_contents("tmp.csv", $new_file);
    return $new_file;
    // return fopen("tmp.csv", "r");
}

function trataCelula($string){
    return utf8_encode(trim(preg_replace('/\t+/', '', $string)));
}
