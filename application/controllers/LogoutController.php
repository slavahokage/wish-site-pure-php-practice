<?php
/**
 * Created by PhpStorm.
 * User: vyacheslav
 * Date: 2/17/19
 * Time: 4:21 PM
 */

class LogoutController extends Controller
{
    function actionIndex()
    {
        unset($_SESSION["user"]);
        unset($_SESSION['loginFail']);
        header('Location: ' . '/');
    }
}