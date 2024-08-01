<?php
namespace App\Patterns\FactoryPattern\Ex1;

abstract class SocialNetworkPoster{

    abstract public function getSocialNetwork(): SocialNetworkConnector;

    public function post($content): void
    {
        $socialNetwork=$this->getSocialNetwork();

        $socialNetwork->logIn();
        $socialNetwork->createPost($content);
        $socialNetwork->logOut();
    }

}