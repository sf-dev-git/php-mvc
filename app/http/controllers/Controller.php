<?php
include 'BaseController.php';

class Controller extends BaseController
{
    public function index() {
        $this->render('index');
    }

    public function post() {
        $this->render('index', ['test' => $this->req_get('test')]);
    }

    public function show($id) {
        $this->render('index', ['test' => $id]);
    }
}