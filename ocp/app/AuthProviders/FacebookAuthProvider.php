<?php

namespace App\AuthProviders;

use App\Interfaces\Authenticator;

class FacebookAuthProvider implements Authenticator
{
    public function authenticate($credentials)
    {
        echo "Authenticated with Facebook";
    }
}
