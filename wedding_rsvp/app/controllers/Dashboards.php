<?php

class Dashboards extends Controller
{
    public function __construct()
    {
        if (!isLoggedIn()) {
            redirect('users/login');
        }

        // $this->postModel = $this->model('Post');
        // $this->userModel = $this->model('User');
    }

    public function index()
    {
        // Get posts
        // $posts = $this->postModel->getPosts();

        $data = [
            'title' => 'Dashboard Page'
        ];

        $this->view('dashboards/index', $data);
    }
}
