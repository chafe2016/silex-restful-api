<?php

require_once __DIR__.'/vendor/autoload.php';
require __DIR__.'/src/constants/json_indexes.php';
require __DIR__.'/src/constants/urls.php';
require __DIR__.'/src/utils.php';

$app = new Silex\Application();

$app['debug'] = true;

$app->get('/', function() use($app) {
    return 'Hello World';
});

$app->get('/api/disque_economia', function() use($app) {
    $json = parseCSV(DADOS_DISQUE_ECONOMIA, headers_disque_economia(), 2);
    return $app->json($json);
});

$app->get('/api/disque_economia/historico', function() use($app) {
    $json = parseCSV(DADOS_DISQUE_ECONOMIA_HISTORICO, headers_disque_economia_historico(), 2);
    return $app->json($json);
});

$app->get('/api/dados_156', function() use($app) {
    $json = parseCSV(DADOS_156, headers_156(), 2);
    return $app->json($json);
});

$app->get('/api/dados_156/historico', function() use($app) {
    $json = parseCSV(DADOS_156_HISTORICO, headers_156_historico(), 2);
    return $app->json($json);
});

$app->get('/api/alvaras', function() use($app) {
    $json = parseCSV(DADOS_ALVARAS, headers_alvaras(), 1);
    return $app->json($json);
});

$app->get('/api/despesas', function() use($app) {
    $json = parseCSV(DADOS_DESPESAS, headers_despesas(), 2);
    return $app->json($json);
});

$app->get('/api/receitas', function() use($app) {
    $json = parseCSV(DADOS_RECEITAS, headers_receitas(), 2);
    return $app->json($json);
});

$app->get('/api/servidores_cargos_encargos', function() use($app) {
    $json = parseCSV(DADOS_SERVIDORES_CARGOS_ENCARGOS, headers_servidores_cargos_encargos(), 2);
    return $app->json($json);
});

$app->get('/api/ua_ativas', function() use($app) {
    return $app->abort(500, "Não foi possível converter o arquivo XLSX");
});

$app->get('/api/pretendentes', function() use($app) {
    return $app->abort(500, "Não foi possível converter o arquivo XLSX");
});

$app->get('/api/pesquisa/natal/2013', function() use($app) {
    $json = parseCSV(DADOS_PESQUISA_NATAL_2013, headers_pesquisa_natal_2013(), 1);
    return $app->json($json);
});

$app->get('/api/pesquisa/natal/2014', function() use($app) {
    $json = parseCSV(DADOS_PESQUISA_NATAL_2014, headers_pesquisa_natal_2014(), 1);
    return $app->json($json);
});

$app->get('/api/curitibaempreendedora/atendimentos', function() use($app) {
    $json = parseCSV(DADOS_CURITIBAEMPREENDEDORA_ATENDIMENTOS, headers_curitibaempreendedora_atendimentos(), 1);
    return $app->json($json);
});

$app->get('/api/curitibaempreendedora/capacitacoes', function() use($app) {
    $json = parseCSV(DADOS_CURITIBAEMPREENDEDORA_CAPACITACOES, headers_curitibaempreendedora_capacitacoes(), 1);
    return $app->json($json);
});

$app->get('/api/esaude/medicos', function() use($app) {
    $json = parseCSV(DADOS_ESAUDE_MEDICOS, headers_esaude_medicos(), 1);
    return $app->json($json);
});

$app->get('/api/esaude/enfermeiros', function() use($app) {
    $json = parseCSV(DADOS_ESAUDE_ENFERMEIROS, headers_esaude_enfermeiros(), 1);
    return $app->json($json);
});

$app->get('/api/esaude/dentistas', function() use($app) {
    $json = parseCSV(DADOS_ESAUDE_DENTISTAS, headers_esaude_dentistas(), 1);
    return $app->json($json);
});

$app->get('/api/esaude/outros', function() use($app) {
    $json = parseCSV(DADOS_ESAUDE_OUTROS, headers_esaude_outros(), 1);
    return $app->json($json);
});

$app->get('/api/feiras', function() use($app) {
    return $app->abort(500, "Não foi possível converter o arquivo XLSX");
});

$app->get('/api/legisladoc', function() use($app) {
    $json = parseCSV(DADOS_LEGISLADOC, headers_legisladoc(), 2);
    return $app->json($json);
});

$app->run();
