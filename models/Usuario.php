<?php
class Usuario extends DbConnect
{

    public static function autenticarUsuario($emailUsuario, $senhaUsuario)
    {
        $pdo = DbConnect::realizarConexao();

        try {
            $stmt = $pdo->prepare("SELECT * FROM usuarios WHERE emailUsuario = ?");
            $stmt->execute([$emailUsuario]);

            if ($stmt->rowCount() > 0) {
                $result = $stmt->fetch(PDO::FETCH_ASSOC);
                $senhaHash = $result['senhaUsuario'];

                if (password_verify($senhaUsuario, $senhaHash)) {
                    return true;
                } else {
                    return false;
                }

            } else {
                return false;
            }
        } catch (PDOException $e) {
            echo "Erro com o banco de dados: " .$e;
        }
    }

    public static function adicionarUsuario($nomeUsuario, $emailUsuario, $senhaUsuario, $idTipoUsuario) {
        $pdo = DbConnect::realizarConexao();

        try {
            $stmt = $pdo->prepare("SELECT * FROM usuarios WHERE emailUsuario = ?");
            $stmt->execute();
            if($stmt->rowCount() > 0) {
                return false;
            } else {
                $hashSenha = password_hash($senhaUsuario, 8);
                $stmt2 = $pdo->prepare("INSERT INTO usuarios VALUES (null, ?, ?, ?)");
                $stmt2->execute([$nomeUsuario, $emailUsuario, $hashSenha, $idTipoUsuario]);
                return true;
            }
        } catch (PDOException $e) {
            echo "Erro com o banco de dados: " .$e;
        }
    }

}
?>