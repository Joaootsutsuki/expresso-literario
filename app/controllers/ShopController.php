<?php

namespace app\controllers;

class ShopController
{
    public function index()
    {
        return [
            'view' => 'shop.php',
            'data' => ['title' => 'Shop', 'yesHeader'] 
        ];
    }
}