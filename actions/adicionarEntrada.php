<?php

require_once ('../models/Entrada.php');

if (isset($_POST['btn-entrada'])) {

    session_start();

    $tipoEquipamento = $_POST['tipoEquipamento'];
    $unidadeEquipamento = $_POST['unidadeEquipamento'];
    $quantidadeEquipamento = $_POST['quantidadeEquipamento'];
    $codigoEquipamento = $_POST['codigoEquipamento'];
    $motivoEntrada = $_POST['motivoEntrada'];
    $estadoEquipamento = $_POST['estadoEquipamento'];
    $observacaoEquipamento = $_POST['observacaoEquipamento'];
    $idUsuario = $_SESSION['idUsuario'];
    $nomePessoa = $_POST['nomePessoa'];
    $holeritePessoa = $_POST['holeritePessoa'];
    $marcaEquipamento = $_POST['marcaEquipamento'];
    $modeloEquipamento = $_POST['modeloEquipamento'];

    Entrada::adicionarEntrada($unidadeEquipamento, $tipoEquipamento, $quantidadeEquipamento, $motivoEntrada,
    $estadoEquipamento, $observacaoEquipamento, $codigoEquipamento, $idUsuario, $nomePessoa, $holeritePessoa, 
    $marcaEquipamento, $modeloEquipamento);

    echo "<script>alert('Entrada adicionada com sucesso!')</script>";
    echo "<script> window.location.href='http://localhost/controle-estoque/views/entrada.php'</script>";
}

?>