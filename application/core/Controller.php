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

    public function __construct()
    {
        $this->view = new View();
    }

    public function actionIndex()
    {

    }

    public function setModel($model)
    {
        $this->model = $model;
    }
}