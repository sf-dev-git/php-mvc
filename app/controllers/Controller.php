<?php
include 'BaseController.php';
include 'app/models/User.php';

class Controller extends BaseController
{
    public function index()
    {
        $this->render('index');
    }

    public function post()
    {
        $this->render('index', ['test' => $this->req_get('test')]);
    }

    public function show($username)
    {
        $user = new User();
        $data = $user->find('username', $username);
        $this->render('index', ['user' => $data]);
    }
}