<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_rumkit extends CI_Model {

    Public function list()
    {
        $this->db->select('*');
        $this->db->from('tbl_rumkit');
        $this->db->order_by('id_rumkit','desc');
        return $this->db->get()->result();
        
    }

}

/* End of file Mod_rumkithp */
