<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Guards extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("guard_model");
        $this->load->library('form_validation');
		$this->load->model("user_model");
		if($this->user_model->isNotLogin()) redirect(site_url('admin/login'));
    }

    public function index()
    {
        $data["guard"] = $this->guard_model->getAll();
        $this->load->view("admin/guard/list", $data);
    }

    public function add()
    {
        $guard = $this->guard_model;
        $validation = $this->form_validation;
        $validation->set_rules($guard->rules());

        if ($validation->run()) {
            $guard->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("admin/guard/new_form");
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('admin/guard');
       
        $guard = $this->guard_model;
        $validation = $this->form_validation;
        $validation->set_rules($guard->rules());

        if ($validation->run()) {
            $guard->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["guard"] = $guard->getById($id);
        if (!$data["guard"]) show_404();
        
        $this->load->view("admin/guard/edit_form", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->guard_model->delete($id)) {
            redirect(site_url('admin/guards'));
        }
    }
}