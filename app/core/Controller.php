<?php

class Controller
{
    /**
     * @param string 
     * @param array 
     */
    public function view($view, $data = [])
    {
        // Mengecek apakah file view ada
        if (file_exists('../app/views/' . $view . '.php')) {
            require_once '../app/views/' . $view . '.php';
        }
    }

    /**
     * @param string 
     * @return object 
     */
    public function model($model){
        require_once '../app/models/' . $model . '.php';
        return new $model;
    }
}
