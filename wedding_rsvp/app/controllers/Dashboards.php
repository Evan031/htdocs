<?php

class Dashboards extends Controller
{
    public function __construct()
    {
        if (!isLoggedIn()) {
            redirect('users/login');
        }

        $this->dashboardModel = $this->model('Dashboard');
    }

    public function index()
    {
        // Get posts
        $users = $this->dashboardModel->getUsers();

        $data = [
            'users' => $users,
        ];

        $this->view('dashboards/index', $data);
    }


 
    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Sanitize POST array
            $_POST = filter_input_array(INPUT_POST, FILTER_UNSAFE_RAW);

            $data = [
                'name' => trim($_POST['name']),
                'surname' => trim($_POST['surname']),
                'name_err' => '',
                'surname_err' => ''
            ];

            // Validate data
            if (empty($data['name'])) {
                $data['name_err'] = 'Please enter name';
            }
            if (empty($data['surname'])) {
                $data['surname_err'] = 'Please enter surname';
            }

            // Make sure no errors
            if (empty($data['name_err']) && empty($data['surname_err'])) {
                // Vaidated
                if ($this->dashboardModel->addGuest($data)) {
                    die('SUCCESS');
                    // flash('post_message', 'Post Added');
                    // redirect('dashboards/index');
                } else {
                    die('Something went wrong');
                }
            } else {
                // Load view with errors
                $this->view('dashboards/add', $data);
            }
        } else {
            $data = [
                'name' => '',
                'surname' => ''
            ];

            $this->view('dashboards/add', $data);
        }
    }
}
