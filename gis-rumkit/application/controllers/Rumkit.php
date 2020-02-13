<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Rumkit extends CI_Controller {

 public function __construct()
   {
       parent::__construct();
       //Do your magic here
       $this->load->library('googlemaps');
       $this->load->model('m_rumkit');
       

       
   }
      

    public function index()
    {
         $data=array(
            'title' => 'Data Rumah Sakit',
            'map'=> $this->googlemaps->create_map(),
            'rumkit'=>$this->m_rumkit->list(),
            'isi'   => 'rumkit/v_lists'
        );
        $this->load->view('template/v_wrapper',$data,FALSE);
    }
public function input()
    {
       //memunculkan petea
        $config['center']='-5.402993, 105.264498';
       $config['zoom']=13;
       $this->googlemaps->initialize($config);
//sampai disini

//marker
        $marker['position'] ='-5.402993, 105.264498';
        $marker['draggable']=true;
        $marker['ondragend']='setToForm(event.latLng.lat(),event.latLng.lng())';
        $this->googlemaps->add_marker($marker);

        $this->form_validation->set_rules('nama_rumkit', 'Nama Rumah Sakit', 'required');
        $this->form_validation->set_rules('alamat', 'alamat', 'required');
        $this->form_validation->set_rules('no_telpon', 'no_telpon', 'required');
        $this->form_validation->set_rules('latitude', 'latitude', 'required');
        $this->form_validation->set_rules('longitude', 'longitude', 'required');
        $this->form_validation->set_rules('deskripsi', 'deskripsi', 'required');

        
        if ($this->form_validation->run() == FALSE) {
            # code...
            $data=array(
            'title' => 'Input Data Rumah Sakit',
            'map'=> $this->googlemaps->create_map(),
            'isi'   => 'rumkit/v_add'
        );
        $this->load->view('template/v_wrapper',$data,FALSE);
        } else {
            # code...
            $data=array(
                'nama_rumkit'=> $this->input->post('nama_rumkit'),
                'alamat'=> $this->input->post('alamat'),
                'no_telpon'=> $this->input->post('no_telpon'),
                'latitude'=> $this->input->post('latitude'),
                'longitude'=> $this->input->post('longitude'),
                'deskripsi'=> $this->input->post('deskripsi'),
            );
            $this->m_rumkit->input($data);
            $this->session->set_flashdata('pesan', 'Data Berhasil Disimpan');
            redirect('rumkit');

        }        
    }
}

/* End of file Rumkit.php */
