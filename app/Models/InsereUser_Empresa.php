<?php

    session_start();
    date_default_timezone_set('America/Sao_Paulo');

    include "ConexaoBD.php";
    include_once "Funcoes.php";

    $tipo_verificacao = $_SESSION['TipoVerificação'];

    switch ($tipo_verificacao) {

        //(LOGANDO NA EMPRESA) Usuario nivel de acesso 2
        case "Usuario":

            $codigo_acesso = ClearInjectionXSS($base, base64_decode($_GET['q']));
            $id_user = ClearInjectionXSS($base, base64_decode($_COOKIE["ID"]));

            $DadosEmpresa = PegarDadosEmpresaPeloCodigo($base, $codigo_acesso);

            $sql = "INSERT INTO user_empresa (id_user, id_empresa, Nivel_acesso) VALUES";
            $sql .= " ('$id_user','".$DadosEmpresa['id_empresa']."','2') ";

            $conexao->query($sql) === TRUE ? header("Location: ../Company.php?q=".base64_encode($DadosEmpresa["id_empresa"])) : header("Location: ../LoginCompany.php");

        break;

        //(CRIANDO A EMPRESA) Usuario nivel de acesso 4
        case "Empresa":

            $codigo_acesso = ClearInjectionXSS($base, base64_decode($_GET['q']));
            $id_adm = ClearInjectionXSS($base, base64_decode($_COOKIE["ID"]));

            $DadosEmpresa = PegarDadosEmpresaPeloId_Codigo($base, $id_adm, $codigo_acesso);

            $sql = "INSERT INTO user_empresa (id_user, id_empresa, Nivel_acesso) VALUES";
            $sql .= " ('$id_adm','".$DadosEmpresa['id_empresa']."','4') ";

            $conexao->query($sql) === TRUE ? header("Location: ../Company.php?q=".base64_encode($DadosEmpresa["id_empresa"])) : header("Location: ../RegisterCompany.php");

        break;

    }
