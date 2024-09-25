<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class tampil_data extends CI_Controller{

    public function tampil_data(){
        $this->load->view('v_tampil_data');
    }
}