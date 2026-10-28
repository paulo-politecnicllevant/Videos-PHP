<?php

namespace Core\Middleware;

class Auth
{
    public function handle()
    {
        if(!($_SERVER['user'] ?? false)){
            header('Location: /');
            exit();
        }
    }
}