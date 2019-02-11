<?php
/**
 * Created by PhpStorm.
 * User: vyacheslav
 * Date: 2/6/19
 * Time: 4:37 PM
 */

class Controller
{
    public $model;
    public $view;

    function __construct()
    {
        $this->view = new View();
    }

    function actionIndex()
    {

    }
}