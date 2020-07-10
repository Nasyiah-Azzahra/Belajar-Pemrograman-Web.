<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Guard_model extends CI_Model
{
    private $_table = "guard";

    public $id;
    public $nama;
    public $nohp;
    public $foto = "default.jpg";
    public $deskripsi;

    public function rules()
    {
        return [
            ['field' => 'nama',
            'label' => 'Nama',
            'rules' => 'required'],

            ['field' => 'nohp',
            'label' => 'NoHp',
            'rules' => 'numeric'],
            
            ['field' => 'deskripsi',
            'label' => 'Deskripsi',
            'rules' => 'required']
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id = uniqid();
        $this->nama = $post["nama"];
        $this->nohp = $post["nohp"];
		$this->foto = $this->_uploadImage();
        $this->deskripsi = $post["deskripsi"];
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id = $post["id"];
        $this->nama = $post["nama"];
        $this->nohp = $post["nohp"];
		
		if ( !empty($_FILES["foto"]["name"]) ) {
			$this->foto = $this->_uploadImage();
		} else {
			$this->foto = $post["old_foto"];
		}
		
        $this->deskripsi = $post["deskripsi"];
        return $this->db->update($this->_table, $this, array('id' => $post['id']));
    }

    public function delete($id)
    {
        $this->_deleteImage($id);
		return $this->db->delete($this->_table, array("id" => $id));
    }
	
	private function _uploadImage()
	{
		$config['upload_path']          = './upload/guard/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['file_name']            = $this->id;
		$config['overwrite']			= true;
		$config['max_size']             = 1024; // 1MB
		// $config['max_width']            = 1024;
		// $config['max_height']           = 768;

		$this->load->library('upload', $config);

		if ($this->upload->do_upload('foto')) {
			return $this->upload->data("file_name");
		}
		
		return "default.jpg";
	}
	
	private function _deleteImage($id)
	{
		$guard = $this->getById($id);
		if ($guard->foto != "default.jpg") {
			$filename = explode(".", $guard->foto)[0];
			return array_map('unlink', glob(FCPATH."upload/guard/$filename.*"));
		}
	}
	
	public function tampil_data()
    {
        return $this->db->get($this->_table);
    }
	
	public function tampil_cari()
    {
        $keyword = $this->input->post('keyword', true);
		$this->db->like('nama', $keyword);
		$this->db->or_like('nohp', $keyword);
		$this->db->or_like('deskripsi', $keyword);
		return $this->db->get($this->_table);
    }
}