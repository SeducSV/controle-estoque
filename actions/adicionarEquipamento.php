<?php 

    require_once('../models/Equipamento.php');

    $tipoEquipamento = $_POST['tipoEquipamento'];
    $marcaEquipamento = $_POST['marcaEquipamento'];
    $modeloEquipamento = $_POST['modeloEquipamento'];

    Equipamento::adicionarEquipamento($tipoEquipamento, $marcaEquipamento, $modeloEquipamento);

    echo "<script>alert('Equipamento adicionado com sucesso!')</script>";
    echo "<script> window.location.href='http://localhost/controle-estoque/views/adicionar.php'</script>";
    
?>