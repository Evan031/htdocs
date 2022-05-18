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
        $guests = $this->dashboardModel->getGuests();

        $data = [
            'guests' => $guests,
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
                    flash('dashboard_message', 'Guest Added');
                    redirect('dashboards/index');
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

    public function delete($id){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            
            if($this->dashboardModel->deleteGuest($id)){
                flash('dashboard_message', 'Guest removed');
                redirect('dashboards/index');
            } else {
                die('Something went wrong');
            }
        } else {
            redirect('dashboards/index');
        }
    }

    public function edit($id)
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
                    flash('dashboard_message', 'Guest Added');
                    redirect('dashboards/edit');
                } else {
                    die('Something went wrong');
                }
            } else {
                // Load view with errors
                $this->view('dashboards/edit', $data);
            }

        } else {
            // !!!!!!!!!! CONTINUE FROM HERE = You need to load the existing data and create a getPostById model


            // // Get existing post from model
            // $guest = $this->postModel->getPostById($id);

            // // Check for owner
            // if($post->user_id != $_SESSION['user_id']){
            //     redirect('posts');
            // }

            // $data = [
            //     'id' => $id,
            //     'title' => $post->title,
            //     'body' => $post->body
            // ];

            // $this->view('posts/edit', $data);
        }
    }
}
