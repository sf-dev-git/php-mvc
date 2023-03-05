<?php

class Controller
{
    public function index() {
        include 'resources/views/index.php';
    }

    public function post($post) {
        var_dump($post);
        include 'resources/views/index.php';
    }
}