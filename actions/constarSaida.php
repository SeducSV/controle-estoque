<?php

session_start();

require_once ('../models/Saida.php');

$nomeSaida = $_POST['nomeSaida'];
$holeriteSaida = $_POST['holeriteSaida'];
$unidadeSaida = $_POST['unidadeSaida'];
$tipoEquipamento = $_POST['tipoEquipamento'];
$modeloEquipamento = $_POST['modeloEquipamento'];
$marcaEquipamento = $_POST['marcaEquipamento'];
$quantidadeEquipamento = $_POST['quantidadeEquipamento'];
$codigoEquipamento = $_POST['codigoEquipamento'];
$motivoSaida = $_POST['motivoSaida'];
$estadoEquipamento = $_POST['estadoEquipamento'];
$observacaoEquipamento = $_POST['observacaoEquipamento'];
$idUsuario = $_SESSION['idUsuario'];

Saida::constarSaida(
    $unidadeSaida,
    $tipoEquipamento,
    $quantidadeEquipamento,
    $motivoSaida,
    $estadoEquipamento,
    $observacaoEquipamento,
    $codigoEquipamento,
    $idUsuario,
    $nomeSaida,
    $holeriteSaida,
    $marcaEquipamento,
    $modeloEquipamento
);

echo "<script>alert('Saida constada com sucesso!')</script>";
echo "<script> window.location.href='http://localhost/controle-estoque/views/saida.php'</script>";

?>