<?php


namespace App\Http\Controllers;


use Tymon\JWTAuth\JWT as Jwt;

class TestController extends Controller
{
    private $jwt;

    public function __construct(Jwt $jwt)
    {
        $this->jwt = $jwt;
    }

    public function login()
    {
        $user = \App\Repositoreis\User\User::where(['name' => 'admin'])->first();
        echo '<pre>';
        var_dump($this->jwt->fromUser($user));
    }
}
