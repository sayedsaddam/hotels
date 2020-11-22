<?php defined('BASEPATH') OR exit('No direct script access allowed!');
/**
 * Home controller, will be responsible to load the very first page of the site.
 */
class Home extends CI_Controller{
    function __construct(){
        parent::__construct();
    }
    // Index function.
    public function index(){
        $data['title'] = 'Home | Hotels';
        $data['body'] = 'home';
        $this->load->view('components/template', $data);
    }
}
