<?php
include 'View.php';
include 'Request.php';
class BaseController
{
    protected $view, $request;
    public function __construct()
    {
        $this->view = new View;
        $this->request = new Request;
    }
}