<?php
include 'BaseController.php';
include 'app/models/User.php';
class Controller extends BaseController
{
    public function index() {
        $user = new User();
        $data = $user->find('username', 'mvp_player');
        $this->render('index', ['user' => $data]);
    }

    public function post() {
        $this->render('index', ['test' => $this->req_get('test')]);
    }

    public function show($id) {
        $this->render('index', ['test' => $id]);
    }
}