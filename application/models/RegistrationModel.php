<?php
/**
 * Created by PhpStorm.
 * User: vyacheslav
 * Date: 2/17/19
 * Time: 2:11 PM
 */

class RegistrationModel extends Model
{
    public function saveUser($name, $password)
    {
        $sql = "INSERT INTO users (name, password) VALUES (:name, :password)";
        $statement = $this->getConnection()->prepare($sql);
        $statement->bindValue(':name', $name);
        $statement->bindValue(':password', $password);
        $inserted = $statement->execute();
        if ($inserted) {
            return true;
        }

        return false;
    }
}