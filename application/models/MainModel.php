<?php
/**
 * Created by PhpStorm.
 * User: vyacheslav
 * Date: 2/7/19
 * Time: 11:14 AM
 */

class MainModel extends Model
{
    public function saveWish($description)
    {
        $sql = "INSERT INTO wishes (description) VALUES (:description)";
        $statement = $this->getConnection()->prepare($sql);
        $statement->bindValue(':description', $description);
        $inserted = $statement->execute();
        if ($inserted) {
            return true;
        }

        return false;
    }

    public function getAllWishes()
    {
        $sql = 'SELECT * FROM wishes';
        $result = [];
        $stmt = $row = $this->getConnection()->query($sql);
        while ($row = $stmt->fetch()) {
            $result[] =  $row['description'];
        }

        return $result;
    }
}