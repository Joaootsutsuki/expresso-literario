<?php

function routes()
{
    return [
        'GET' =>[
        '/' => 'HomeController@index',
        '/shop' => 'ShopController@index',
        '/about' => 'AboutController@index',
        '/login' => 'LoginController@index',
        '/logout' => 'LoginController@destroy',
        '/user/cart' => 'UserController@cart',
        '/user/create' => 'UserController@create',
        '/user/profile' => 'UserController@profile',
        '/user/[0-9]+' => 'UserController@index',

        ],

        'POST' =>[
            '/login' => 'LoginController@home',
            '/user/create' => 'UserController@store'
        ],
    ];
    
        
}