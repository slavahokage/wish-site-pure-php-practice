<?php

class Route
{
    public static function start()
    {
        $controllerName = 'Main';
        $modelName = 'Main';
        $actionName = 'index';

        $routes = explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

        // получаем имя контроллера
        /* if (!empty($routes[1])) {
             $controllerName = $routes[1];
         }*/

        // получаем имя экшена
        /* if (!empty($routes[2])) {
             $actionName = $routes[2];
         }*/

        $i = count($routes) - 1;
        $flag = false;

        while ($i > 0) {
            if ($routes[$i] != '') {
                if (file_exists("application/controllers/" . ucfirst($routes[$i]) . "Controller.php") || !empty($_GET)) {
                    $controllerName = ucfirst($routes[$i]) . "Controller";
                    $modelName = ucfirst($controllerName) . 'Model';
                    $flag = true;
                    break;
                } else {
                    $actionName = $routes[$i];
                }
            }
            $i--;
        }

        if ($flag === false) {
            $controllerName = $controllerName . "Controller";
            $modelName = $modelName . 'Model';
        }


        $actionName = 'action' . ucfirst($actionName);

        $modelFile = $modelName . '.php';
        $modelPath = "application/models/" . $modelFile;
        if (file_exists($modelPath)) {
            include "application/models/" . $modelFile;
        }

        $controllerFile = $controllerName . '.php';
        $controllerPath = "application/controllers/" . $controllerFile;

        if (file_exists($controllerPath)) {
            include "application/controllers/" . $controllerFile;
        } else {
            //Route::ErrorPage404();
            echo 404;
        }

        $controller = new $controllerName;
        $action = $actionName;

        if (method_exists($controller, $action)) {
            $controller->$action();
        } else {
            //Route::ErrorPage404();
            echo 404;
        }
    }

    private static function ErrorPage404()
    {
        $host = 'http://' . $_SERVER['HTTP_HOST'] . '/';
        header('HTTP/1.1 404 Not Found');
        header("Status: 404 Not Found");
        header('Location:' . $host . '404');
    }
}