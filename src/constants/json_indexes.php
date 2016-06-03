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
    return ["identificacao","pesquisador","data","horario","local","procedencia","bairro_cidade","estado","pais","transporte","pessoas",
        "tipo_companhia","pernoitou","qtde","hospedagem","motivacao","frequencia","gasto","sabendo","chegou","frequencia","transito","seguranca",
        "areas_verdes","lazer","hospitalidade","gastronomia","sinalizacao","horario","local","divulgacao","organizacao","geral","escolaridade",
        "renda","genero","idade","sugestao","critica","elogio"];
}
function headers_pesquisa_natal_2014(){
    return ["identificacao","pesquisador","data","horario","local","procedencia","bairro_cidade","estado","pais","transporte","pessoas",
        "tipo_companhia","pernoitou","qtde","hospedagem","motivacao","frequencia","gasto","sabendo","chegou","frequencia","transito","seguranca",
        "areas_verdes","lazer","hospitalidade","gastronomia","sinalizacao","horario","local","divulgacao","organizacao","geral","escolaridade",
        "renda","genero","idade","faixa_etaria","sugestao","critica","elogio"];
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
        "desencadeou_internamento","data_internamento","estabelecimento_solicitante","estabelecimento_destino","cid_internamento",
        "tratamento_no_domicilio","abastecimento","energia_eletrica","tipo_habitacao","destino_lixo","fezes_urina","comodos","caso_doenca",
        "grupo_comunitario","meio_comunicacao","meio_transporte","municipio","bairro"];
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
        "ato_ano_projeto_lei","ato_numero_projeto_lei","ato_ano_mensagem","ato_numero_mensagem","ato_sumula","ato_numero_unico",
        "ato_texto_republicacao","ato_diario_oficial_suplemento","diario_oficial_numero","diario_oficial_ano","diario_oficial_data_publicacao",
        "diario_oficial_status","diario_oficial_texto","diario_oficial_suplemento_numero","diario_oficial_suplemento_ano",
        "diario_oficial_suplemento_data_publicacao","diario_oficial_suplemento_status","diario_oficial_suplemento_texto","tipo_ato_zera_numeracao",
        "tipo_ato_tipo_numeracao","tipo_ato_ordem_apresentacao","tipo_ato_grupo","tipo_ato_situacao"];
}
function headers_sigesguarda(){
    return ["atendimento_ano","atendimento_bairro_nome","equipamento_urbano_nome","flag_equipamento_urbano","flag_flagrante","logradouro_nome",
        "natureza1_defesa_civil","natureza1_descricao","natureza2_defesa_civil","natureza2_descricao","natureza3_defesa_civil","natureza3_descricao",
        "natureza4_defesa_civil","natureza4_descricao","natureza5_defesa_civil","natureza5_descricao","subcategoria1_descricao",
        "subcategoria2_descricao","subcategoria3_descricao","subcategoria4_descricao","subcategoria5_descricao","ocorrencia_ano","ocorrencia_codigo",
        "ocorrencia_data","ocorrencia_dia_semana","ocorrencia_hora","ocorrencia_mes","operacao_descricao","origem_chamado_descricao",
        "regional_fato_nome","secretaria_nome","secretaria_sigla","servico_nome","situacao_equipe_descricao","numero_protocolo_156"];
}
function headers_aprendere(){
    return ["orgao","curso","ano_execucao","area_tematica","carga_horaria","total_inscritos","total_certificados"];
}
function headers_pesquisa_linha_turismo_2013(){
    return ["identificacao","pesquisador","data","horario","ponto","procedencia","bairro_cidade","estado","pais","transporte","pessoas",
        "tipo_companhia","pernoitou","qtde","hospedagem","motivacao","frequencia","gasto","sabendo","primeira_vez","atrativo_1","atrativo_2",
        "atrativo_3","atrativo_4","atrativo_5","itinerario","pontualidade","disponibilidade_horarios","duracao_roteiro","conforto","audio",
        "seguranca_veiculo","atendimento_cortesia","conducao_veiculo","limpeza","preco","informacao_turistica","divulgacao","escolaridade","renda",
        "genero","idade","sugestao","critica","elogio"];
}
function headers_pesquisa_linha_turismo_2014(){
    return headers_pesquisa_linha_turismo_2013();
}
function headers_oficina_musica_categoria(){
    return ["idf","titulo","situacao"];
}
function headers_oficina_musica_curso(){
    return ["idf","titulo","ofi_idf","nuc_idf","tipo","esp_idf","ementa","requisitos","valor","selecao","publicado","data_cadastro",
        "data_publicacao","obrig_video"];
}
function headers_oficina_musica_espaco(){
    return ["esp_idf","esp_nome","esp_telefone","esp_telefone_alt","esp_descricao","esp_finalidade","esp_url_fcc","esp_end_cep","esp_end_logradouro",
        "esp_end_numero","esp_end_complemento","esp_end_bairro","esp_end_cidade","esp_end_estado","esp_latitude","esp_longitude"];
}
function headers_oficina_musica_evento(){
    return ["eve_idf","ofi_idf","esp_idf","eve_titulo","eve_descricao","eve_publicado","eve_categoria","eve_valor","eve_data","eve_horario"];
}
function headers_oficina_musica_nucleo(){
    return ["idf","cnu_idf","titulo"];
}
function headers_oficina_musica_oficina(){
    return ["ofi_idf","ofi_titulo","ofi_data_inicio","ofi_data_termino","ofi_publicado","ofi_data_inicio_insc","ofi_data_termino_insc",
        "ofi_valor_curso","ofi_desconto_2","ofi_desconto_3","ofi_data_inicio_sel","ofi_data_termino_sel","ofi_data_declaracao"];
}
function headers_oficina_musica_professor(){
    return ["pro_idf","pro_sexo","pro_estado_civil","pro_data_nascimento","pro_pais","pro_estado_local","pro_profissao",
        "pro_escolaridade","pro_publicado"];
}
function headers_oficina_musica_turma(){
    return ["idf","cur_idf","nome","num_vagas","situacao"];
}
function headers_fundacao_cultural_area(){
    return ["id","nome","codigo","listar","data_criacao","data_ultima_alteracao"];
}
function headers_fundacao_cultural_bairro(){
    return ["id","descricao","nucleo_id"];
}
function headers_fundacao_cultural_categoria(){
    return ["id","descricao","codigo","data_criacao","data_ultima_alteracao"];
}
function headers_fundacao_cultural_conteudo(){
    return ["id","titulo","descricao","data_publicacao","ativo","codigo","id_categoria","id_formulario","data_criacao",
        "data_ultima_alteracao","meta_description","meta_keywords"];
}
function headers_fundacao_cultural_curso(){
    return ["id","ativo","area_id","nucleo_id","espaco_id","outro_espaco","endereco_id","nome","descricao","inscricao","mensalidade","classificacao",
        "observacao","horarios","codigo","data_criacao","data_ultima_alteracao"];
}
function headers_fundacao_cultural_edital(){
    return ["id","nome","descricao","data","ativo","data_criacao","data_ultima_alteracao"];
}
function headers_fundacao_cultural_endereco(){
    return ["id","logradouro","numero","complemento","bairro_id","cep","cidade","estado","fone","fax","fone_comercial","fone_celular","lat","lng"];
}
function headers_fundacao_cultural_espaco(){
    return ["id","nome","nucleo_id","endereco_id","site","email","horario","apresentacao","horario","codigo","ativo","visivel","data_criacao",
        "data_ultima_alteracao","meta_description","meta_keywords"];
}
function headers_fundacao_cultural_evento(){
    return ["id","ativo","area_id","nucleo_id","espaco_id","outro_espaco","endereco_id","nome","descricao","ingresso","horarios","codigo",
        "linguagem_id","tipo_acao_id","data_criacao","data_ultima_alteracao","publico_dirigido","classificacao","meta_description","meta_keywords"];
}
function headers_fundacao_cultural_evento_data(){
    return ["evento_data_id","evento_id","data_inicio","data_termino","dom","seg","ter","qua","qui","sex","sab"];
}
function headers_fundacao_cultural_formulario(){
    return ["id","descricao","titulo","destinatario","copia_oculta","ativo","exibe_captcha","data_inicio","data_fim","data_criacao",
        "data_ultima_alteracao"];
}
function headers_fundacao_cultural_formulario_campo(){
    return ["formulario_id","id","descricao","obrigatorio","ordem","place_holder"];
}
function headers_fundacao_cultural_nucleo(){
    return ["id","nome","horario","email","endereco_id","codigo","data_criacao","data_ultima_alteracao","meta_description","meta_keywords"];
}
function headers_eventos(){
    return ["eve_idf","eve_titulo","eve_descricao","eve_publicado","eve_data_inicio","eve_data_termino","see_str_nome","eve_data_cadastro",
        "eve_local","eve_endereco","eve_horario","eve_repetir","eve_dia","bai_descricao","ete_descricao","eti_descricao","reg_descricao"];
}