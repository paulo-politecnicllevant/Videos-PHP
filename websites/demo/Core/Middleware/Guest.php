<?php

namespace Core\Middleware;

class Guest
{
    public function handle()
    {
        if($_SERVER['user'] ?? false){
            header('Location: /');
            exit();
        }
    }
}