<?php

class Request
{
    protected $parameters;
    protected $http_method;
    protected $uri;

    public function __construct()
    {
        $this->parameters = array_merge($_GET, $_POST);
        $this->http_method = $_SERVER['REQUEST_METHOD'];
        $this->uri = $_SERVER['REQUEST_URI'];
    }

    public function get($key)
    {
        return $this->parameters[$key] ?? null;
    }

    public function all()
    {
        return $this->parameters;
    }

    public function method()
    {
        return $this->http_method;
    }

    public function uri()
    {
        return $this->uri;
    }
}