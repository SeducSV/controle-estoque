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

    Entrada::adicionarEntrada($unidadeEquipamento, $tipoEquipamento, $quantidadeEquipamento, $motivoEntrada,
    $estadoEquipamento, $observacaoEquipamento, $codigoEquipamento, $idUsuario);

    echo "<script>alert('Entrada adicionada com sucesso!')</script>";
    echo "<script> window.location.href='http://localhost/controle-estoque/views/entrada.php'</script>";
}

?>