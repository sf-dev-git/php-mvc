<?php
trait Request
{
    protected $req_parameters, $http_method, $uri;

    public function set_request()
    {
        $this->req_parameters = array_merge($_GET, $_POST);
        $this->http_method = $_SERVER['REQUEST_METHOD'];
        $this->uri = $_SERVER['REQUEST_URI'];
    }

    public function req_get($key)
    {
        return $this->req_parameters[$key] ?? null;
    }

    public function req_all()
    {
        return $this->req_parameters;
    }

    public function req_method()
    {
        return $this->http_method;
    }

    public function req_uri()
    {
        return $this->uri;
    }
}