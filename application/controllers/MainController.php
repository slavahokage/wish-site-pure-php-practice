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
        $data = $this->model->getAllWishes();
        $this->view->generate('mainView.php', 'templateView.php', $data);
    }

    function actionSave()
    {
        $this->model->saveWish($_POST['wish']);
        echo $_POST['wish'];
    }
}