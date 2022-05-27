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

    // function foo($str)

    public function rsvp($id)
    {
        $data = [
            'title' => 'RSVP',
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
                            $hint =  "<a href=". URLROOT . '/pages/rsvp/' . "$guest_id><li> $guest_full_name</li></a>";
                        } else {
                            $hint .= "<a href=". URLROOT . '/pages/rsvp/' . "$guest_id><li> $guest_full_name</li></a>";
                        }
                    }
                }
            }

            // Output "no suggestion" if no hint was found or output correct values
            echo $hint === "" ? "<li>There is noone by that name</li>" : $hint;

            // $this->view('pages/gethint', $data);
        }
    }
}
