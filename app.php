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

$app->get('/api/sigesguarda', function() use($app) {
    $json = parseCSV(DADOS_SIGESGUARDA, headers_sigesguarda(), 2);
    return $app->json($json);
});

$app->get('/api/aprendere', function() use($app) {
    $json = parseCSV(DADOS_APRENDERE, headers_aprendere(), 2);
    return $app->json($json);
});

$app->get('/api/pesquisa/linha_turismo/2013', function() use($app) {
    $json = parseCSV(DADOS_PESQUISA_LINHA_TURISMO_2013, headers_pesquisa_linha_turismo_2013(), 1);
    return $app->json($json);
});

$app->get('/api/pesquisa/linha_turismo/2014', function() use($app) {
    $json = parseCSV(DADOS_PESQUISA_LINHA_TURISMO_2014, headers_pesquisa_linha_turismo_2014(), 1);
    return $app->json($json);
});

$app->get('/api/oficina_musica/categoria', function() use($app) {
    $json = parseCSV(DADOS_OFICINA_MUSICA_CATEGORIA, headers_oficina_musica_categoria(), 2);
    return $app->json($json);
});

$app->get('/api/oficina_musica/curso', function() use($app) {
    $json = parseCSV(DADOS_OFICINA_MUSICA_CURSO, headers_oficina_musica_curso(), 2);
    return $app->json($json);
});

$app->get('/api/oficina_musica/espaco', function() use($app) {
    $json = parseCSV(DADOS_OFICINA_MUSICA_ESPACO, headers_oficina_musica_espaco(), 2);
    return $app->json($json);
});

$app->get('/api/oficina_musica/evento', function() use($app) {
    $json = parseCSV(DADOS_OFICINA_MUSICA_EVENTO, headers_oficina_musica_evento(), 2);
    return $app->json($json);
});

$app->get('/api/oficina_musica/nucleo', function() use($app) {
    $json = parseCSV(DADOS_OFICINA_MUSICA_NUCLEO, headers_oficina_musica_nucleo(), 2);
    return $app->json($json);
});

$app->get('/api/oficina_musica/oficina', function() use($app) {
    $json = parseCSV(DADOS_OFICINA_MUSICA_OFICINA, headers_oficina_musica_oficina(), 2);
    return $app->json($json);
});

$app->get('/api/oficina_musica/professor', function() use($app) {
    $json = parseCSV(DADOS_OFICINA_MUSICA_PROFESSOR, headers_oficina_musica_professor(), 2);
    return $app->json($json);
});

$app->get('/api/oficina_musica/turma', function() use($app) {
    $json = parseCSV(DADOS_OFICINA_MUSICA_TURMA, headers_oficina_musica_turma(), 2);
    return $app->json($json);
});

$app->get('/api/fundacao_cultural/area', function() use($app) {
    $json = parseCSV(DADOS_FUNDACAO_CULTURAL_AREA, headers_fundacao_cultural_area(), 2);
    return $app->json($json);
});

$app->get('/api/fundacao_cultural/bairro', function() use($app) {
    $json = parseCSV(DADOS_FUNDACAO_CULTURAL_BAIRRO, headers_fundacao_cultural_bairro(), 2);
    return $app->json($json);
});

$app->get('/api/fundacao_cultural/lei_incentivo/categoria', function() use($app) {
    $json = parseCSV(DADOS_FUNDACAO_CULTURAL_CATEGORIA, headers_fundacao_cultural_categoria(), 2);
    return $app->json($json);
});

$app->get('/api/fundacao_cultural/lei_incentivo/conteudo', function() use($app) {
    $json = parseCSV(DADOS_FUNDACAO_CULTURAL_CONTEUDO, headers_fundacao_cultural_conteudo(), 2);
    return $app->json($json);
});

$app->get('/api/fundacao_cultural/curso', function() use($app) {
    $json = parseCSV(DADOS_FUNDACAO_CULTURAL_CURSO, headers_fundacao_cultural_curso(), 2);
    return $app->json($json);
});

$app->get('/api/fundacao_cultural/edital', function() use($app) {
    $json = parseCSV(DADOS_FUNDACAO_CULTURAL_EDITAL, headers_fundacao_cultural_edital(), 2);
    return $app->json($json);
});

$app->get('/api/fundacao_cultural/endereco', function() use($app) {
    $json = parseCSV(DADOS_FUNDACAO_CULTURAL_ENDERECO, headers_fundacao_cultural_endereco(), 2);
    return $app->json($json);
});

$app->get('/api/fundacao_cultural/espaco', function() use($app) {
    $json = parseCSV(DADOS_FUNDACAO_CULTURAL_ESPACO, headers_fundacao_cultural_espaco(), 2);
    return $app->json($json);
});

$app->get('/api/fundacao_cultural/evento', function() use($app) {
    $json = parseCSV(DADOS_FUNDACAO_CULTURAL_EVENTO, headers_fundacao_cultural_evento(), 2);
    return $app->json($json);
});

$app->get('/api/fundacao_cultural/evento/data', function() use($app) {
    $json = parseCSV(DADOS_FUNDACAO_CULTURAL_EVENTO_DATA, headers_fundacao_cultural_evento_data(), 2);
    return $app->json($json);
});

$app->get('/api/fundacao_cultural/formulario', function() use($app) {
    $json = parseCSV(DADOS_FUNDACAO_CULTURAL_FORMULARIO, headers_fundacao_cultural_formulario(), 2);
    return $app->json($json);
});

$app->get('/api/fundacao_cultural/formulario/campo', function() use($app) {
    $json = parseCSV(DADOS_FUNDACAO_CULTURAL_FORMULARIO_CAMPO, headers_fundacao_cultural_formulario_campo(), 2);
    return $app->json($json);
});

$app->get('/api/fundacao_cultural/nucleo', function() use($app) {
    $json = parseCSV(DADOS_FUNDACAO_CULTURAL_NUCLEO, headers_fundacao_cultural_nucleo(), 2);
    return $app->json($json);
});

$app->get('/api/eventos', function() use($app) {
    $json = parseCSV(DADOS_EVENTOS, headers_eventos(), 2);
    return $app->json($json);
});

$app->run();
