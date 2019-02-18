<?php
/**
 * Created by PhpStorm.
 * User: vyacheslav
 * Date: 2/17/19
 * Time: 3:06 PM
 */

class LoginModel extends Model
{
    public function checkLogin($name, $password)
    {
        $sql = "SELECT * FROM users WHERE name=:name;";
        $statement = $this->getConnection()->prepare($sql);
        $statement->bindValue(':name', $name);
        $checkQuery = $statement->execute();
        if (!$checkQuery) {
            return false;
        }
        $selects = $statement->fetchAll();

        if (password_verify($password, $selects[0]['password'])) {
            return true;
        }

        return false;
    }
}