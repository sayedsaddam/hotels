<?php defined('BASEPATH') OR exit('No direct script access allowed!');
/**
 * undocumented class
 */
class Home_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    public function get_data(){
        $otherdb = $this->load->database('otherdb', TRUE); // the TRUE parameter tell CI that you'd like to return the DB object
        $query = $otherdb->select('*')->get('users');
        return $query->result();
    }
}
