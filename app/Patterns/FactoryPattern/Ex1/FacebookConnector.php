<?php

namespace App\Patterns\FactoryPattern\Ex1;

class FacebookConnector implements SocialNetworkConnector
{

    private string $login;
    private string $password;

    public function __construct(string $login, string $password)
    {
        $this->login = $login;
        $this->password = $password;
    }

    public function logIn(): void
    {
        echo "-Send HTTP API request to log in user $this->login with " .
            "password $this->password  ( Facebook ) <br>";
    }

    public function createPost($content): void
    {
        echo "-Send HTTP API requests to create a post in Facebook timeline.  ( Facebook )<br>";
    }

    public function logOut(): void
    {
        echo "-Send HTTP API request to log out user $this->login  ( Facebook )<br>";
    }
}
