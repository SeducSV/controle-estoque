<?php 

require_once('../db/db_connect.php');

class Equipamento extends DbConnect {

    public static function listarTiposEquipamentos() {
        $pdo = DbConnect::realizarConexao();

        $stmt = $pdo->prepare("SELECT * FROM tipos_equipamentos");
        $stmt->execute();
        $dados = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $dados;
    }

    public static function adicionarEquipamento($tipoEquipamento, $marcaEquipamento, $modeloEquipamento) {
        $pdo = DbConnect::realizarConexao();

        $stmt = $pdo->prepare("INSERT INTO equipamentos VALUES (null, ?, ?, ?)");
        $stmt->execute([$tipoEquipamento, $marcaEquipamento, $modeloEquipamento]);

        
    }

    public static function listarEquipamentos() {
        $pdo = DbConnect::realizarConexao();

        $stmt = $pdo->prepare("SELECT * FROM equipamentos");
        $stmt->execute();
        $dados = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $dados;
    }

}

?>