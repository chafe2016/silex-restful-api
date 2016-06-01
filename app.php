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

function getFilePart($file, $lines){
    $new_file = tmpfile();
    if($file){
        $i = 0;
        while ($i <= $lines) {
            fwrite($new_file, fgets($file));
            $i++;
        }
        // fclose($new_file);
    } 
    else {
        return false;
    }
    fseek($new_file, 0);
    return $new_file;
}

$app = new Silex\Application(); 

$app->get('/', function() use($app) { 
    return 'Hello World'; 
}); 

$app->get('/hello/{name}', function($name) use($app) { 
    return 'Hello '.$app->escape($name); 
}); 

$app->get('/api/dados156', function() use($app) {
    $json = csvToArray(getcwd() . "/data/156_-_Base_de_Dados.csv", ";");
    // $handle = getFilePart(fopen(getcwd() . "/data/156_-_Base_de_Dados.csv", 'r'), 20);
    // if ($handle) {
    //     while (($line = fgets($handle)) !== false) {
    //         print_r($line);
    //     }
    //     fclose($handle);
    // } else {
    //     return false;
    // }
    print_r($json);
    return true;
}); 

$app->run(); 