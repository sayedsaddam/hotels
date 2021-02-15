<?php defined('BASEPATH') OR exit('No direct script access allowed!');
/**
 * Home controller, will be responsible to load the very first page of the site.
 */
class Home extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('home_model');
    }
    // Index function.
    public function index(){
        $data['title'] = 'Home | Hotels';
        $data['body'] = 'home';
        $data['posts'] = $this->home_model->get_data();
        $this->load->view('components/template', $data);
    }
    // About us.
    public function about(){
        $data = $this->home_model->get_data();
        echo "<pre>"; print_r($data);
    }
    // Hotels
    public function hotels(){
        echo 'Hotels';
    }
    // Locations
    public function locations(){
        echo 'Locations';
    }
}
