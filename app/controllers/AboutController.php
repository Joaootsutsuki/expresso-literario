<?php

namespace app\controllers;

class AboutController
{
    public function index()
    {
        return [
            'view' => 'about.php',
            'data' => ['title' => 'About'] 
        ];
    }
}