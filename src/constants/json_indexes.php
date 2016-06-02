<?php

function headers_disque_economia(){
    return ["data_pesquisa","codigo_estabelecimento","codigo_estabelecimento_filial","codigo_categoria_produto",
        "codigo_produto","preco_pesquisado","codigo_estabelecimento","codigo_estabelecimento_filial","endereco_estabelecimento",
        "numero_endereco_estabelecimento","complemento_endereco_estabelecimento","telefone_estabelecimento","codigo_bairro",
        "cidade_estabelecimento","estado_estabelecimento","codigo_bairro","descricao_bairro","estabelecimento_rede",
        "estabelecimento_razao_social","codigo_categoria_produto","descricao_categoria_produto","codigo_produto",
        "codigo_categoria_produto","codigo_tipo_embalagem_produto","codigo_tipo_unidade_medida_produto","produto_descricao",
        "produto_qtd_embalagem","codigo_tipo_unidade_medida_produto","tipo_unidade_medida_produto_descricao",
        "tipo_unidade_medida_produto_sigla","codigo_tipo_embalagem_produto","tipo_embalagem_produto_descricao","tipo_embalagem_produto_sigla"];
}
function headers_disque_economia_historico(){
    return headers_disque_economia();
}
function headers_156(){
    return ["solicitacao","tipo","orgao","data","horario","assunto","subdivisao","descricao","logradouro_ass","bairro_ass","regional_ass",
        "meio_resposta","observacao","sexo","bairro_cidadao","regional_cidadao","data_nasc","tipo_cidadao","orgao_resp","resposta_final"];
}
function headers_156_historico(){
    return ["solicitacao","data","hora","historico"];
}
function headers_alvaras(){
    return ["nome_empresarial","inicio_atividade","numero_do_alvara","nome_da_empresa","data_emissao","data_expiracao","atividade_principal",
        "atividade_secundaria1","endereco","numero","unidade","andar","complemento","bairro","cep"];
}
function headers_despesas(){
    return ["ano_empenho","dt_empenho","cd_fonte","ds_fonte","cd_funcao","ds_funcao","cd_programa","ds_programa","cd_acao","ds_acao",
    "cd_subelemento","ds_subelemento","cd_orgao","ds_orgao","cd_despesa","ds_despesa","codigo_despesa_grupo","ds_grupo","codigo_despesa_modalidade",
    "ds_modalidade","codigo_despesa_elemento","ds_elemento","cpf_cnpj","nr_empenho","licitacao","vl_empenhado","cd_item","ds_item","ds_unidade",
    "quantidade","vl_preco_unitario","vl_total","protocolosup","dt_transacao","vl_liquidado","vl_devolvido","vl_anulado","vl_pago","vl_consignado"];
}
function headers_receitas(){
    return ["cd_receita","cd_categoria","descricao_categoria","cd_origem","descricao_origem","cd_especie","descricao_especie","cd_rubrica",
    "descricao_rubrica","cd_alinea","descricao_alinea","cd_subalinea","descricao_subalinea","cd_exercicio","dt_apropriacao","tp_receita_orc",
    "cd_empresa","nm_empresa","vl_receita","ds_fonte"];
}
function headers_servidores_cargos_encargos(){
    return ["nome","cargo","cargo_comissao","mes","ano","lotacao","total_descontos","total_liquido","tot_vantagens","motivo","descricao_evento",
    "valor_evento","tipo_evento"];
}
function headers_ua_ativas(){
    return ;
}
function headers_pretendentes(){
    return ;
}
function headers_pesquisa_natal_2013(){
    return ["identificacao","pesquisador","data","horario","local","procedencia","bairro_cidade","estado","pais","transporte","pessoas","tipo_companhia",
    "pernoitou","qtde","hospedagem","motivacao","frequencia","gasto","sabendo","chegou","frequencia","transito","seguranca","areas_verdes","lazer",
    "hospitalidade","gastronomia","sinalizacao","horario","local","divulgacao","organizacao","geral","escolaridade","renda","genero","idade",
    "sugestao","critica","elogio"];
}
function headers_pesquisa_natal_2014(){
    return ["identificacao","pesquisador","data","horario","local","procedencia","bairro_cidade","estado","pais","transporte","pessoas","tipo_companhia",
    "pernoitou","qtde","hospedagem","motivacao","frequencia","gasto","sabendo","chegou","frequencia","transito","seguranca","areas_verdes","lazer",
    "hospitalidade","gastronomia","sinalizacao","horario","local","divulgacao","organizacao","geral","escolaridade","renda","genero","idade",
    "faixa_etaria","sugestao","critica","elogio"];
}
function headers_curitibaempreendedora_atendimentos(){
    return ["cod_clientes","ano","mes","dia","regional","genero","escolaridade","data_cadastro","tipo_atendimento"];
}
function headers_curitibaempreendedora_capacitacoes(){
    return ["cod_cliente","ano","mes","dia","data_cadastro","regional","genero","escolaridade","hora","endereço","tema","presenca"];
}
function headers_esaude_medicos(){
    return ["data_atendimento","data_nascimento","sexo","codigo_tipo_unidade","tipo_unidade","codigo_unidade","descricao_unidade","codigo_procedimento",
        "descricao_procedimento","cbo_codigo","cbo_descricao","codigo_cid","descricao_cid","solicitacao_exames","qtd_prescrita_farmacia_curitibana",
        "qtd_dispensada_farmacia_curitibana","qtd_medicamento_nao_padronizado","encaminhamento_para_atendimento_especialista","area_atuacao",
        "desencadeou_internamento","data_internamento","estabelecimento_solicitante","estabelecimento_destino","cid_internamento","tratamento_no_domicilio",
        "abastecimento","energia_eletrica","tipo_habitacao","destino_lixo","fezes_urina","comodos","caso_doenca","grupo_comunitario","meio_comunicacao",
        "meio_transporte","municipio","bairro"];
}
function headers_esaude_enfermeiros(){
    return headers_esaude_medicos();
}
function headers_esaude_dentistas(){
    return headers_esaude_medicos();
}
function headers_esaude_outros(){
    return headers_esaude_medicos();
}
function headers_feiras_curitiba(){
    return ;
}
function headers_legisladoc(){
    return ["ato_idf","ato_numero_identificacao","ato_numero_oficial","ato_diario_oficial","ato_versao","ato_data_criacao","ato_data_assinatura",
    "ato_data_publicacao","ato_data_republicacao","tipo_ato","status_ato","situacao_acao","ato_tramitavel","orgao_origem","orgao_emissor",
    "ato_ano_processo","ato_numero_processo","ato_procedencia_processo","ato_ano_oficio","ato_numero_oficio","ato_procedencia_oficio",
    "ato_ano_projeto_lei","ato_numero_projeto_lei","ato_ano_mensagem","ato_numero_mensagem","ato_sumula","ato_numero_unico","ato_texto_republicacao",
    "ato_diario_oficial_suplemento","diario_oficial_numero","diario_oficial_ano","diario_oficial_data_publicacao","diario_oficial_status",
    "diario_oficial_texto","diario_oficial_suplemento_numero","diario_oficial_suplemento_ano","diario_oficial_suplemento_data_publicacao",
    "diario_oficial_suplemento_status","diario_oficial_suplemento_texto","tipo_ato_zera_numeracao","tipo_ato_tipo_numeracao",
    "tipo_ato_ordem_apresentacao","tipo_ato_grupo","tipo_ato_situacao"];
}
function headers_sigesguarda(){
    return ;
}
function headers_aprendere(){
    return ;
}
function headers_pesquisa_linha_turismo_2013(){
    return ;
}
function headers_pesquisa_linha_turismo_2014(){
    return ;
}
function headers_oficina_musica_categoria_nucleo(){
    return ;
}
function headers_oficina_musica_curso(){
    return ;
}
function headers_oficina_musica_espaco(){
    return ;
}
function headers_oficina_musica_evento(){
    return ;
}
function headers_oficina_musica_nucleo(){
    return ;
}
function headers_oficina_musica_oficina(){
    return ;
}
function headers_oficina_musica_professor(){
    return ;
}
function headers_oficina_musica_turma(){
    return ;
}
function headers_fundacao_cultural_area(){
    return ;
}
function headers_fundacao_cultural_bairro(){
    return ;
}
function headers_fundacao_cultural_categoria(){
    return ;
}
function headers_fundacao_cultural_conteudo(){
    return ;
}
function headers_fundacao_cultural_curso(){
    return ;
}
function headers_fundacao_cultural_edital(){
    return ;
}
function headers_fundacao_cultural_endereco(){
    return ;
}
function headers_fundacao_cultural_espaco(){
    return ;
}
function headers_fundacao_cultural_evento(){
    return ;
}
function headers_fundacao_cultural_evento_data(){
    return ;
}
function headers_fundacao_cultural_formulario(){
    return ;
}
function headers_fundacao_cultural_formulario_campo(){
    return ;
}
function headers_fundacao_cultural_nucleo(){
    return ;
}
function headers_eventos(){
    return ;
}