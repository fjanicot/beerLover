<?php

namespace App\Core;

class Router
{
    public function match(string $uri): ?string
    {
        if($uri === '/') {
            return 'home';
        }

        if($uri === '/a-propos'){
            return 'about';
        }

        return null;
    }
}
