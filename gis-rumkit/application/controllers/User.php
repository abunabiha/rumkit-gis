<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    public function __construct()
   {
       parent::__construct();
       //Do your magic here
       $this->load->library('googlemaps');

       
   }
     

    public function index()
    {
        $data=array(
            'title' => 'Data User',
             'map'=> $this->googlemaps->create_map(),
            'isi'   => 'user/v_lists'
        );
        $this->load->view('template/v_wrapper',$data,FALSE);
    }

}

/* End of file User.php */
