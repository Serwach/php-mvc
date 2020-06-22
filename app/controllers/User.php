<?php

class User extends Framework
{
    public function index()
    {
        echo "userIndex";
    }

    public function userMethod()
    {
        $myModel = $this->model('userModel');
        var_dump($myModel->myData());
    }
}
