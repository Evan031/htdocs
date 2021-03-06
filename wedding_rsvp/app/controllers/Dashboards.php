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
        // Get model results
        $guests = $this->dashboardModel->getGuests();
        $count = $this->dashboardModel->getGuestCount();
        $rsvp_yes = $this->dashboardModel->rsvpFilter(1);
        $rsvp_no = $this->dashboardModel->rsvpFilter(0);
        $attending_yes = $this->dashboardModel->attendingFilter(1);
        $attending_no = $this->dashboardModel->attendingFilter(0);

        // Guest attending graph
        $guest_graph = $this->dashboardModel->guestAttendingGraph();
        $attending_values = [];
        $attending_names = [];
        $attending_graph = (array)($guest_graph[0]);
        graph_array($attending_graph, $attending_names, $attending_values);

        // RSVP graph
        $rsvp_graph = $this->dashboardModel->guestRsvpGraph();
        $rsvp_values = [];
        $rsvp_names = [];
        $guest_rsvp_graph = (array)($rsvp_graph[0]);
        graph_array($guest_rsvp_graph, $rsvp_names, $rsvp_values);

        // Get food graph
        $food_graph = $this->dashboardModel->getFoodGraph();
        $food_values = [];
        $food_names = [];
        $guest_food_graph = (array)($food_graph[0]);
        graph_array($guest_food_graph, $food_names, $food_values);

        $food_pref = $this->dashboardModel->download_sheet();
        $food_array = array();
        foreach ($food_pref as $food) {
            array_push($food_array, array($food->name, $food->surname, $food->food_name));
        }

        $file = fopen("food_preferences.csv", "w");

        foreach ($food_array as $line) {
            fputcsv($file, $line);
        }

        fclose($file);


        $data = [
            'guests' => $guests,
            'count' => $count,
            'rsvp_yes' => $rsvp_yes,
            'rsvp_no' => $rsvp_no,
            'attending_yes' => $attending_yes,
            'attending_no' => $attending_no,
            'attending_values' => json_encode($attending_values),
            'attending_names' => json_encode($attending_names),
            'rsvp_values' => json_encode($rsvp_values),
            'rsvp_names' => json_encode($rsvp_names),
            'food_values' => json_encode($food_values),
            'food_names' => json_encode($food_names),
            'food_pref' => $food_pref
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

    public function delete($id)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            if ($this->dashboardModel->deleteGuest($id)) {
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

    public function csv_download()
    {


        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if ($this->dashboardModel->download_sheet()) {
                flash('dashboard_message', 'Download in progress');
                redirect('dashboards/index');
            } else {
                die('Something went wrong');
            }
        } else {
            redirect('dashboards/index');
        }
    }
}
