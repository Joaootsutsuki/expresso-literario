<?php

namespace app\controllers;

class HomeController
{
    public function index()
    {

    //    $categories = query("select * from category limit 4");

    //    $booksByCategory = array();

    //    foreach($categories as $category){
    //     $categoryId = $category["id"];
    //     $categoryName = $category['name'];
        
    //     $books = getBookByCategory($categoryId);
    //     $booksByCategory[$categoryName] = $books;
    //    }
      
        return [
            'view' => 'home.php',
            'data' => ['title' => 'Home', 'yesHeader']
        ];
    }
}