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
        $count = $this->dashboardModel->getGuestCount();
        $guest_graph = $this->dashboardModel->guestCountGraph();

        $data = [
            'guests' => $guests,
            'count' => $count,
            'guest_graph' => $guest_graph
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
                'id' => $id,
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
                // Validated
                if ($this->dashboardModel->updateGuest($data)) {
                    flash('dashboard_message', 'Guest Edited');
                    redirect('dashboards/index');
                } else {
                    die('Something went wrong');
                }
            } else {
                // Load view with errors
                $this->view('dashboards/edit', $data);
            }

        } else {
            // Get existing user from model
            $guest = $this->dashboardModel->getGuestById($id);

            $data = [
                'id' => $id,
                'name' => $guest->name,
                'surname' => $guest->surname
            ];

            $this->view('dashboards/edit', $data);
        }
    }
}
