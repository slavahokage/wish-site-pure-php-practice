<?php
/**
 * Created by PhpStorm.
 * User: vyacheslav
 * Date: 2/6/19
 * Time: 4:49 PM
 */

class MainController extends Controller
{
    function actionIndex()
    {
        $this->view->generate('mainView.php', 'templateView.php');
    }

    function actionSave()
    {

    }
}