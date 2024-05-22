<?php

require_once('../db/db_connect.php');

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
            $stmt->execute([$emailUsuario]);
            if($stmt->rowCount() > 0) {
                return false;
            } else {
                $hashSenha = password_hash($senhaUsuario, PASSWORD_DEFAULT);

                $stm = $pdo->prepare("INSERT INTO usuarios VALUES (null, ?, ?, ?, ?)");
                $stm->execute(array($nomeUsuario, $emailUsuario, $hashSenha, $idTipoUsuario));

                return true;
            }
        } catch (PDOException $e) {
            echo "Erro com o banco de dados: " .$e;
        }
    }

    public static function deletarUsuario($idUsuario) {
        $pdo = DbConnect::realizarConexao();

        try {
            $stmt = $pdo->prepare("DELETE FROM usuarios WHERE idUsuario = ?");
            $stmt->execute([$idUsuario]);

            return true;
        } catch (PDOException $e) {
            echo "Erro com o banco de dados: " .$e;
        }
    }

    public static function atualizarUsuario($idUsuario, $nomeUsuario, $emailUsuario, $idTipoUsuario) {
        $pdo = DbConnect::realizarConexao();

        try {
            $stmt = $pdo->prepare("UPDATE usuarios SET nomeUsuario = ?, emailUsuario = ?, tipoUsuario = ? WHERE idUsuario = ?");
            $stmt->execute([$nomeUsuario, $emailUsuario, $idTipoUsuario, $idUsuario]);

            return true;
        } catch (PDOException $e) {
            echo "Erro com o banco de dados: " .$e;
        }
    }

    public static function atualizarSenha($idUsuario, $senhaAntiga, $senhaNova) {
        $pdo = DbConnect::realizarConexao();

        try {
            $stmt = $pdo->prepare("SELECT * FROM usuarios WHERE idUsuario = ?");
            $stmt->execute([$idUsuario]);
            $result = $stmt->fetch(PDO::FETCH_ASSOC);

            if(password_verify($senhaAntiga, $result['senhaUsuario'])) {
                $hashSenha = password_hash($senhaNova, PASSWORD_DEFAULT);

                $stm = $pdo->prepare("UPDATE usuarios SET senhaUsuario = ? WHERE idUsuario = ?");
                $stm->execute([$hashSenha, $idUsuario]);

                return true;

            } else {
                return false;
            }

        } catch (PDOException $e) {
            echo "Erro com o banco de dados: " .$e;
        }
    }

    public static function listarUsuarios() {
        $pdo = DbConnect::realizarConexao();

        try {
            $stmt = $pdo->prepare("SELECT * FROM usuarios");
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return $result;
        } catch (PDOException $e) {
            echo "Erro com o banco de dados: " .$e;
        }
    }

    public static function selecionarUsuario($idUsuario) {
        $pdo = DbConnect::realizarConexao();

        try {
            $stmt = $pdo->prepare("SELECT * FROM usuarios WHERE idUsuario = ?");
            $stmt->execute([$idUsuario]);
            $result = $stmt->fetch(PDO::FETCH_ASSOC);

            return $result;

        } catch (PDOException $e) {
            echo "Erro com o banco de dados: " .$e;
        }
    }

    public static function listarTiposUsuarios() {
        $pdo = DbConnect::realizarConexao();

        try {
            $stmt = $pdo->prepare("SELECT * FROM tipos_usuarios");
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return $result;
        } catch (PDOException $e) {
            echo "Erro com o banco de dados: " .$e;
        }
    }

    public static function criarContaAdmin() {
        $pdo = DbConnect::realizarConexao();

        try {
            $nome = "ADMIN";
            $email = "admin@admin.com";
            $senha = password_hash('123', PASSWORD_DEFAULT);

            $stmt = $pdo->prepare("INSERT INTO usuarios VALUES (null, ?, ?, ?, 1)");
            $stmt->execute([$nome, $email, $senha]);
        } catch (PDOException $e) {
            echo "Erro com o banco de dados: " .$e;
        }
    }

    public static function selecionarUsuarioPorEmail($email) {
        $pdo = DbConnect::realizarConexao();
        $stmt = $pdo->prepare("SELECT * FROM usuarios WHERE emailUsuario = ?");
        $stmt->execute([$email]);
        $dados = $stmt->fetch(PDO::FETCH_ASSOC);

        return $dados;
    }
}
?>