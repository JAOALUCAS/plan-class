<?php

class Conexao
{

    public static function  conectar($caminho)
    {
        $conf = parse_ini_file($caminho);
        $dsn = "mysql:host={$conf['host']};dbname={$conf['dbname']}";

        $pdo = new PDO(
            $dsn,
            $conf['user'],
            $conf['password']
        );

        return $pdo;
    }
    
}
