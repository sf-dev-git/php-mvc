<?php
include 'BaseController.php';
class Controller extends BaseController
{
    public function index() {
        $this->view->render('index');
    }

    public function post() {
        $this->view->render('index', ['test' => $this->request->get('test')]);
    }

    public function show($id) {
        $this->view->render('index', ['test' => $id]);
    }
}