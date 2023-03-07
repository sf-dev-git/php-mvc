<?php
include 'traits/View.php';

class BaseController
{
    use View, Request;

    public function __construct()
    {
        $this->set_request();
    }
}