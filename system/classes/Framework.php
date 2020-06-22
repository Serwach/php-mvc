<?php

class Framework
{
    public function view($viewName, $data = [])
    {
        if (file_exists("../app/views/" . $viewName . ".php")) {
            require_once "../app/views/$viewName.php";
        } else {
            echo "view not found";
        }
    }

    public function model($modelName)
    {
        if (file_exists("../app/models/" . $modelName . ".php")) {
            require_once "../app/models/$modelName.php";
            return new $modelName;
        } else {
            echo "model not found";
        }
    }
}
