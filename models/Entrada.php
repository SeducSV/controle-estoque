<?php 

class Entrada extends DbConnect {
    public static function adicionarEntrada($nomeEntrada, $unidadeEntrada, $idEquipamento, $quantidadeEquipamento,
    $motivoEntrada, $estadoEquipamento, $observacaoEquipamento, $codigoEquipamento, $idUsuario) {

        try{
            $pdo = DbConnect::realizarConexao();

            $stmt = $pdo->prepare("INSERT INTO entradas VALUES (null, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
            $stmt->execute([$nomeEntrada, $unidadeEntrada, $idEquipamento, $quantidadeEquipamento,
            $motivoEntrada, $estadoEquipamento, $observacaoEquipamento, $codigoEquipamento, $idUsuario]);

            return true;

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