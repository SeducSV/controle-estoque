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
            
            $stmt = $pdo->prepare("SELECT * FROM estoque WHERE idEquipamento = ?");
            $stmt->execute([$idEquipamento]);
            $dados = $stmt->fetch(PDO::FETCH_ASSOC);


            if($stmt->rowCount() > 0 && $dados['quantidadeEstoque'] >= $quantidadeEquipamento) {

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
        } else {
            return false;
        }
        } catch (PDOException $e) {
            echo "Erro com o banco de dados: " . $e;
        }

    }
}
?>