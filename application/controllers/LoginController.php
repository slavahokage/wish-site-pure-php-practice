<?php
/**
 * Created by PhpStorm.
 * User: vyacheslav
 * Date: 2/17/19
 * Time: 3:05 PM
 */

class LoginController extends Controller
{
    public function actionIndex()
    {
        $this->view->generate('loginView.php', 'templateView.php');
    }

    function actionCheck()
    {
        $login = $this->model->checkLogin($_POST['name'], $_POST['password']);

        if ($login === true) {
            $_SESSION['user'] = $_POST['name'];
            unset($_SESSION['loginFail']);
            header('Location: ' . '/');
        } else {
            $_SESSION['loginFail'] = 'fail';
            header('Location: ' . '/login');
        }
    }
}