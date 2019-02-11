<?php
/**
 * Created by PhpStorm.
 * User: vyacheslav
 * Date: 2/11/19
 * Time: 7:37 PM
 */

class Connection
{

    public static $PDO = null;

    private $connection;

    private $host;

    private $database;

    private $username;

    private $password;

    /**
     * Connection constructor.
     */
    public function __construct()
    {
        $this->connection = getenv('DB_CONNECTION');
        $this->host = getenv('DB_HOST');
        $this->database = getenv('DB_DATABASE');
        $this->username = getenv('DB_USERNAME');
        $this->password = getenv('DB_PASSWORD');
    }

    public function getConnectionInstance()
    {
        try {
            $PDO = new PDO($this->connection . ':host=' . $this->host . ';dbname=' . $this->database, $this->username, $this->password);
            return $PDO;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}