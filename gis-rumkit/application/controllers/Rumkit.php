<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Rumkit extends CI_Controller {

    public function index()
    {
         $data=array(
            'title' => 'Data Rumah Sakit',
            'isi'   => 'rumkit/v_lists'
        );
        $this->load->view('template/v_wrapper',$data,FALSE);
    }

}

/* End of file Rumkit.php */
