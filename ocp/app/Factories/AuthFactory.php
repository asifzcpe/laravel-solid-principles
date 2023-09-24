<?php

namespace App\Factories;

use App\AuthProviders\EmailAuthProvider;
use App\AuthProviders\FacebookAuthProvider;
use App\AuthProviders\GoogleAuthProvider;
use App\Interfaces\Authenticator;

class AuthFactory
{
    public function createAutheticator(Authenticator $authenticator)
    {
        return $authenticator;
    }
}
