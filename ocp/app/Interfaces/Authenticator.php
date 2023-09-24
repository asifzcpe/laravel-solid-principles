<?php

namespace App\Interfaces;

interface Authenticator
{
    public function authenticate($credentials);
}
