<?php

namespace App\Patterns\FactoryPattern\Ex1;

interface SocialNetworkConnector{
   
    public function logIn(): void;

    public function createPost($content): void;

    public function logOut(): void;

}