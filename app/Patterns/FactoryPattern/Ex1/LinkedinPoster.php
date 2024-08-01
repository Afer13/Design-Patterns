<?php

namespace App\Patterns\FactoryPattern\Ex1;

class LinkedinPoster extends SocialNetworkPoster
{

    private string $email;
    private string $password;

    public function __construct(string $email, string $password)
    {
        $this->email = $email;
        $this->password = $password;
    }

    public function getSocialNetwork(): SocialNetworkConnector
    {
        return new LinkedinConnector($this->email,$this->password);
    }
}
