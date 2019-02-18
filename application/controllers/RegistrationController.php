<?php
/**
 * Created by PhpStorm.
 * User: vyacheslav
 * Date: 2/17/19
 * Time: 12:49 PM
 */

class RegistrationController extends Controller
{
    function actionIndex()
    {
        $this->view->generate('registrationView.php', 'templateView.php');
    }

    function actionSave()
    {
        $user = $this->model->saveUser($_POST['name'], $_POST['password']);
        if ($user === true) {
            $_SESSION['user'] = $_POST['name'];
            header('Location: ' . '/');
        } else {
            $_SESSION['duplicateName'] = 'duplicate';
            header('Location: ' . '/registration');
        }
    }
}