<?php 
    class DbConnect {
        public static function realizarConexao(){
            return $pdo = new PDO("mysql:host=localhost;dbname=estoquedb;chasert=utf-8", 'root', '');
        }
    }
?>