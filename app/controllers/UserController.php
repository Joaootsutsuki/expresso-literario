<?php

namespace app\controllers;

class UserController
{
    public function index()
    {
        var_dump('Estou no index do user');
    }

    public function cart()
    {
        var_dump('Estou no cart do user');
    }

    public function create()
    {
        return [
            'view' => 'register.php',
            'data' => ['title' => 'Register', 'noNavbar', 'noFooter']
        ];
    }
    
    public function store()
    {
        $validate = validate([
            'name' => 'required',
            'cpf' => 'unique|maxlen:11',
            'email' => 'unique|email',
            'password' => 'required',
        ]);

        if(!$validate){
            return redirect(("/user/create"));
        }


        $validate['password'] = password_hash($validate['password'], PASSWORD_DEFAULT);
        
        $created = create('user', $validate);
        
        if(!$created){
            setFlash('message', 'Ocorreu um erro ao cadastrar, tente novamente em alguns segundos.');
            return redirect('/user/create');
        }

        setFlash('message', 'Usuário cadastrado com sucesso', 'success');
        return redirect('/user/create');
    }

    public function profile()
    {
        var_dump('Estou no profile do user');
    }

}