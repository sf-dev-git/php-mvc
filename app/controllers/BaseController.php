<?php

include 'traits/View.php';
include 'traits/Response.php';

class BaseController
{
    use View, Request, Response;

    public function __construct()
    {
        $this->set_request();
    }
}