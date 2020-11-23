<?php

require_once 'AppController.php';
require_once __DIR__.'/../models/Users.php';

class SecuritiControler extends AppController
{
    public function login()
    {
        $user = new Users('abc', '123', 'jan', 'kos');

        if($this->isPost())
        {
            return $this->login('logowanie');
        }

        $email = $_POST["email"];
        $password = $_POST["password"];

        if($user->getMail() !== $email)
        {
            return $this->render('logowanie', ['messages' => ["Wrong e-mail"]]);
        }

        if($user->getPassword() !== $password)
        {
            return $this->render('logowanie', ['messages' => ['Wrong password']]);
        }

       return $this->render('panel_startowy');

       // $url = "http://$_SERVER[HTTP_HOST]";
       // header("Location: {$url}/projects");
    }
}