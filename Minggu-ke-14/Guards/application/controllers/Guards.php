<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guards extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->model("guard_model");
    }
	
	public function index()
	{
		$data['guard'] = $this->guard_model->tampil_data()->result();
		if( $this->input->post('keyword') ) {
			$data['guard'] = $this->guard_model->tampil_cari()->result();
		}
		$this->load->view('index', $data);
	}
}
