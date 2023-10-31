<?php

namespace app\controllers;

class LoginController
{
    public function index()
    {
      return [
        'view' => 'login.php',
        'data' => ['title' => 'Login', 'noNavbar', 'noFooter'] 
      ];
    }

    public function home()
    {
      $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
      $password = htmlspecialchars($_POST['password']);

      if(empty($email) || empty($password)){
        return setMessageAndRedirect('message', 'Email ou senha inválidos.', '/login');
      }

      $user = findBy('user', 'email', $email);

      if(!$user){
        return setMessageAndRedirect('message', 'Email ou senha inválidos.', '/login');
      }
  
      if(!password_verify($password, $user->password)){
       return setMessageAndRedirect('message', 'Email ou senha inválidos.', '/login');
      }

      $_SESSION[LOGGED] = $user;
      
      return header('Location: /');
    }

    public function destroy()
    {
      unset($_SESSION[LOGGED]);

      return redirect('/');
    }
  
}