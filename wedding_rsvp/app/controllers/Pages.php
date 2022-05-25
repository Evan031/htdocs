<?php
class Pages extends Controller
{
    public function __construct()
    {
        $this->pageModel = $this->model('Page');
    }

    public function index()
    {
        // Get user info
        $guest_info = $this->pageModel->getGuestInfo();

        $data = [
            'guest_info' => $guest_info,
        ];

        $this->view('pages/index', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'About Us'
        ];

        $this->view('pages/about', $data);
    }

    public function gethint()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $data = [];

            $this->view('pages/gethint', $data);
        }
    }
}
