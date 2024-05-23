<?php

require_once ('../db/db_connect.php');

class Saida extends DbConnect
{
    public static function constarSaida (
        $unidadeSaida,
        $idEquipamento,
        $quantidadeEquipamento,
        $motivoSaida,
        $estadoEquipamento,
        $observacaoEquipamento,
        $codigoEquipamento,
        $idUsuario,
        $nomePessoa,
        $holeritePessoa,
        $marcaEquipamento,
        $modeloEquipamento,
    ) {

        try {
            $pdo = DbConnect::realizarConexao();

            $data = date("Y-m-d H:i:s");

            $stmt = $pdo->prepare("INSERT INTO saidas VALUES (null, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
            $stmt->execute([
                $nomePessoa,
                $quantidadeEquipamento,
                $motivoSaida,
                $data,
                $idUsuario,
                $idEquipamento,
                $codigoEquipamento,
                $holeritePessoa,
                $marcaEquipamento,
                $modeloEquipamento,
                $estadoEquipamento,
                $observacaoEquipamento,
                $unidadeSaida
                
            ]);

            if ($stmt->rowCount() > 0) {
                $stmt = $pdo->prepare("UPDATE estoque SET quantidadeEstoque = quantidadeEstoque - ? WHERE idEquipamento = ?");
                $stmt->execute([$quantidadeEquipamento, $idEquipamento]);
                return true;
            }

        } catch (PDOException $e) {
            echo "Erro com o banco de dados: " . $e;
        }

    }
}
?>