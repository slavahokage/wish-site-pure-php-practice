<?php
/**
 * Created by PhpStorm.
 * User: vyacheslav
 * Date: 2/6/19
 * Time: 4:36 PM
 */

class Model
{
    private $connection;

    /**
     * Model constructor.
     * @param $connection
     */
    public function __construct($connection)
    {
        $this->connection = $connection;
    }

    public function getData()
    {

    }
}