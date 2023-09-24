<?php

namespace App\AuthProviders;

use App\Interfaces\Authenticator;

class GoogleAuthProvider implements Authenticator
{
    public function authenticate($credentials)
    {
        echo "Authenticated with Google account credentials";
    }
}
