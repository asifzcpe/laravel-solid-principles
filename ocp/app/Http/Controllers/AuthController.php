<?php

namespace App\Http\Controllers;

use App\AuthProviders\EmailAuthProvider;
use App\AuthProviders\GoogleAuthProvider;
use App\AuthProviders\TwitterAuthProvider;
use App\Factories\AuthFactory;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    protected $authFactory;

    public function __construct(AuthFactory $authFactory)
    {
        $this->authFactory = $authFactory;
    }

    public function login()
    {
        $authenticator = $this->authFactory->createAutheticator(new TwitterAuthProvider());
        $authenticator->authenticate(['rahman@gmail.com', '1234']);
    }
}
