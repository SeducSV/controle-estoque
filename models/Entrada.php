<?php 

require_once('../db/db_connect.php');

class Entrada extends DbConnect {
    public static function adicionarEntrada($unidadeEntrada, $idEquipamento, $quantidadeEquipamento,
    $motivoEntrada, $estadoEquipamento, $observacaoEquipamento, $codigoEquipamento, $idUsuario) {

        try{
            $pdo = DbConnect::realizarConexao();

            $data = date("Y-m-d H:i:s");

            $stmt = $pdo->prepare("INSERT INTO entradas VALUES (null, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
            $stmt->execute([$unidadeEntrada, $idEquipamento, $quantidadeEquipamento,
            $motivoEntrada, $estadoEquipamento, $observacaoEquipamento, $codigoEquipamento, $data, $idUsuario]);

            if($stmt->rowCount() > 0) {
                $stmt = $pdo->prepare("SELECT * FROM estoque WHERE idEquipamento = ?");
                $stmt->execute([$idEquipamento]);
                if($stmt->rowCount() > 0) {
                    $stmt = $pdo->prepare("UPDATE estoque SET quantidadeEstoque = quantidadeEstoque + ? WHERE idEquipamento = ?");
                    $stmt->execute([$quantidadeEquipamento, $idEquipamento]);
                    return true;
                } else {
                    $stmt = $pdo->prepare("INSERT INTO estoque VALUES (null, ?, ?)");
                    $stmt->execute([$quantidadeEquipamento, $idEquipamento]);
                    return true;
                }
            }

        } catch (PDOException $e) {
            echo "Erro com o banco de dados: " .$e;
        }

    }

    public static function selecionarEntradas() {
        try {
            $pdo = DbConnect::realizarConexao();

            $stmt = $pdo->prepare("SELECT * FROM entradas");
            $stmt->execute();

            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $result;

        } catch(PDOException $e) {
            echo "Erro com o banco de dados: " .$e;
        }
    }

    public static function selecionarEntrada($idEntrada) {
        try {
            $pdo = DbConnect::realizarConexao();

            $stmt = $pdo->prepare("SELECT * FROM entradas WHERE idEntrada = ?");
            $stmt->execute([$idEntrada]);

            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            return $result;

        } catch(PDOException $e) {
            echo "Erro com o banco de dados: " .$e;
        }
    } 

}

?>