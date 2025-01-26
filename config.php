<?php
    date_default_timezone_set("America/Sao_Paulo");  //Definindo o fuso horário

    //LOCAL
    if ($_SERVER['REMOTE_ADDR'] == "127.0.0.1" or $_SERVER['REMOTE_ADDR'] == "::1") {
        $url = "http://localhost/portfolio-ahn/";
    } 

    //HOMOLOGAÇÃO 
    else if (substr_count($_SERVER['REQUEST_URI'], "/clientes") >= 1) {
        
        $url = "https://bmasolucoesdigitais.com.br/clientes/bmasolucoesdigitais-bootstrap";
    } 

    // PRODUÇÃO
    else {
        $url = "https://www.bmasolucoesdigitais-bootstrap.com.br";
    }
?>
