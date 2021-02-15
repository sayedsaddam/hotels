<?php defined('BASEPATH') OR exit('No direct script access allowed!');
/**
 * undocumented class
 */
class Home_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    public function get_data(){
        $otherdb = $this->load->database('otherdb', TRUE); // the TRUE parameter tells CI that you'd like to return the DB object
        $query = $otherdb->select('ID, post_title, post_content, post_date')->order_by('post_date', 'DESC')->limit(2)->get('wp_posts');
        return $query->result();
    }
}
