<?php
/**
 * Created by PhpStorm.
 * User: vyacheslav
 * Date: 2/10/19
 * Time: 6:51 PM
 */

class TestController extends Controller
{
    function actionIndex()
    {
        $this->view->generate('testView.php', 'templateView.php');
    }
}