<?php

namespace App\AuthProviders;

use App\Interfaces\Authenticator;

class TwitterAuthProvider implements Authenticator
{
    public function authenticate($credentials)
    {
        echo "Authenticated with Twitter account credentials";
    }
}
