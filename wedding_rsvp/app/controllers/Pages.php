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

        $guest_array = [];

        foreach ($guest_info as $guests) {
            $guest_array += [intval($guests->id) => $guests->name . ' ' . $guests->surname];
        }

        $data = [
            'guest_array' => $guest_array,
        ];

        $this->view('pages/index', $data);
    }

    public function rsvp($id)
    {
        // Get user info
        $main_info = $this->pageModel->getMains();

        $main_array = [];

        foreach ($main_info as $main) {
            $main_array += [intval($main->id) => $main->food_name];
        }

        $data = [
            'main_array' => $main_array,
            'id' => $id
        ];

        $this->view('pages/rsvp', $data);
    }

    public function gethint($name)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $data = [
                'name' => $name
            ];

            // Array with names
            $guest_array = $_SESSION["guest_list"];

            // get the q parameter from URL
            $query = $data['name'];

            $hint = "";

            // lookup all hints from array if $query is different from ""
            if ($query !== "") {
                $query = strtolower($query);
                $len = strlen($query);
                foreach ($guest_array as $guest_id => $guest_full_name) {
                    if (stristr($query, substr($guest_full_name, 0, $len))) {
                        if ($hint === "") {
                            $hint =  "<a href=" . URLROOT . '/pages/rsvp/' . "$guest_id><li> $guest_full_name</li></a>";
                        } else {
                            $hint .= "<a href=" . URLROOT . '/pages/rsvp/' . "$guest_id><li> $guest_full_name</li></a>";
                        }
                    }
                }
            }

            // Output "no suggestion" if no hint was found or output correct values
            echo $hint === "" ? "<li>There is noone by that name</li>" : $hint;
        }
    }

    public function no($id)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $guest = $_SESSION["guest_list"][$id];

            $data = [
                'guest_id' => $id
            ];

            if ($this->pageModel->notAttending($id)) {
                flash('page_message', $guest . ' will not be attending the wedding.');
                $this->pageModel->rsvp($data);
                redirect('pages/index');
            } else {
                die('Something went wrong');
            }
        } else {
            redirect('pages/index');
        }
    }

    public function yes()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_UNSAFE_RAW);    

            $data = [
                'guest_id' => trim($_POST['guest_id']),
                'guest_main' => trim($_POST['guest_main']),
            ];
            $guest = $_SESSION["guest_list"][$data['guest_id']];

            if (empty($data['guest_main'])) {
                flash('page_message', 'You have not chosen a main dish');
                redirect('pages/rsvp/' . $data['guest_id']);
            }

            if ($this->pageModel->attending($data)) {
                flash('page_message', $guest . ' thanks for attending our wedding!!');
                $this->pageModel->rsvp($data);
                redirect('pages/index');
            } else {
                die('Something went wrong');
            }
        } else {
            redirect('pages/index');
        }
    }

}
