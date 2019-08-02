<?php
class UserManager extends Manager
{
    public function getUser()
    {
        $pdo = $this->getPDO();
        $stmt = $pdo->query("SELECT * FROM user WHERE username = '".$_POST['username']."'");

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}