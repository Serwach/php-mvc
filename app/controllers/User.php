<?php

class User
{
    public function index()
    {
        echo "userIndex";
    }

    public function print(string $param1, string $param2)
    {
        echo "print " . $param1 . " " . $param2;
    }
}
