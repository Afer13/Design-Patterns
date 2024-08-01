<?php

namespace App\Patterns\FactoryPattern\Ex1;

class LinkedinConnector implements SocialNetworkConnector
{

    private string $email;
    private string $password;

    public function __construct(string $email, string $password)
    {
        $this->email = $email;
        $this->password = $password;
    }

    public function logIn(): void
    {
        echo "-Send HTTP API request to log in user $this->email with " .
            "password $this->password ( LinkedIn )<br>";
    }

    public function logOut(): void
    {
        echo "-Send HTTP API request to log out user $this->email  ( LinkedIn ) <br>";
    }

    public function createPost($content): void
    {
        echo "-Send HTTP API requests to create a post in LinkedIn timeline.  ( LinkedIn )<br>";
    }
}
