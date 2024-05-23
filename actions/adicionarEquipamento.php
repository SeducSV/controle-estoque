<?php 

    require_once('../models/Equipamento.php');

    $tipoEquipamento = $_POST['tipoEquipamento'];

    Equipamento::adicionarEquipamento($tipoEquipamento);

    echo "<script>alert('Equipamento adicionado com sucesso!')</script>";
    echo "<script> window.location.href='http://localhost/controle-estoque/views/adicionar.php'</script>";
    
?>