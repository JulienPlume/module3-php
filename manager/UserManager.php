<?php
class UserManager extends Manager
{
    public function getUser()
    {
        $pdo = $this->getPDO();

        $stmt = $pdo->prepare("SELECT * FROM user_table WHERE username = ?");
        $stmt->execute([$_POST['username'], ]);

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}

