<?php
class Manager
{
    public function getPDO()
    {
        try
        {

            $pdo = new PDO('mysql:host=localhost;dbname=forteroche;charset=utf8', 'root', '');
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

            return $pdo;
        }
        catch(Exception $e)
        {
            die('Erreur : ' . $e->getMessage());
        }
    }
}

