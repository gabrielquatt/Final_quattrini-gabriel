<?php

class View
{

    public function __construct()
    {
    }

    public function view($list)
    {
        var_dump($list);
    }

    public function viewError($mensaje)
    {
        echo $mensaje;
    }
}
