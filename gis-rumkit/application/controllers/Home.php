<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller {

    public function index()
    {
        $data=array(
            'title' => 'Gis Rumah Sakit Bandar Lampung',
            'isi'   => 'v_home'
        );
        $this->load->view('template/v_wrapper',$data,FALSE);
    }

}

/* End of file home.php */
