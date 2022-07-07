<?php

namespace App\Core\Router;

class Route
{
    private $name;
    private $uri;
    private $controller;
    private $method;

    public function __construct(string $name, string $uri, string $controller, string $method)
    {
        $this->name = $name;
        $this->uri = $uri;
        $this->controller = $controller;
        $this->method = $method;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getUri(): string
    {
        return $this->uri;
    }

    public function getController(): string
    {
        return $this->controller;
    }

    public function getMethod(): string
    {
        return $this->method;
    }
}
