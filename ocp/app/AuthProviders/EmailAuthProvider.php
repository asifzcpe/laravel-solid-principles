<?php

namespace App\AuthProviders;

use App\Interfaces\Authenticator;

class EmailAuthProvider implements Authenticator
{
    public function authenticate($credentials)
    {
        echo "Authenticated with email credentials";
    }
}
