<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller {

   
   public function __construct()
   {
       parent::__construct();
       //Do your magic here
       $this->load->library('googlemaps');

       
   }
   
    public function index()
    {
       $config['center']='-5.402993, 105.264498';
       $config['zoom']=13;
       $this->googlemaps->initialize($config);
  
        $data=array(
            'title' => 'Pemetaan Rumah Sakit Bandar Lampung',
            'map'=> $this->googlemaps->create_map(),
            'isi'   => 'v_home'
        );
        $this->load->view('template/v_wrapper',$data,FALSE);
    }

}

/* End of file home.php */
