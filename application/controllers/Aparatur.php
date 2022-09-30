<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aparatur extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('Aparatur_model', 'aparatur');
	}

	public function index()
    {
		if ($this->session->userdata('username') == "") {
			redirect(base_url());
		} else {
			$data['instansi'] =  $this->db->get('instansi')->result_array();
			$data['aparatur'] = $this->aparatur->getAllAparatur();
			$this->load->view('template-admin/header.php', $data);
			$this->load->view('menu-admin/aparatur/index.php', $data);
			$this->load->view('template-admin/footer.php');
		}
    }

    public function tambah()
	{
		if ($this->session->userdata('username') == "") {
			redirect(base_url());
		} else {
			$data['instansi'] =  $this->db->get('instansi')->result_array();
			$this->form_validation->set_rules('nama', 'nama', 'required');
			
			if ( $this->form_validation->run() == FALSE ) {
				$data['jekel'] = ["", "Laki-Laki", "Perempuan"];
				$data['jabatan'] = ["", "Kepala Desa", "Sekretaris Desa", "Bendahara", "Staff"];
				$this->load->view('template-admin/header', $data);
				$this->load->view('menu-admin/aparatur/tambah');
				$this->load->view('template-admin/footer');
			} else {
				$this->aparatur->add();
				// var_dump($this->aparatur->add());
				// exit();
				$this->session->set_flashdata('flash','Ditambahkan');
				redirect('aparatur');
			}
		}
	}

    public function ubah($id)
	{
		if ($this->session->userdata('username') == "") {
			redirect(base_url());
		} else {
			$data['instansi'] =  $this->db->get('instansi')->result_array();
			$data['aparatur'] = $this->aparatur->getAparaturById($id);
			$this->form_validation->set_rules('nama', 'nama', 'required');

			if ( $this->form_validation->run() == FALSE ) {
				$data['jekel'] = ["", "Laki-Laki", "Perempuan"];
				$data['jabatan'] = ["", "Kepala Desa", "Sekretaris Desa", "Bendahara", "Staff"];
				$this->load->view('template-admin/header', $data);
				$this->load->view('menu-admin/aparatur/ubah', $data);
				$this->load->view('template-admin/footer');
			} else {
				$this->aparatur->update();
				$this->session->set_flashdata('flash','Diupdate');
				redirect('aparatur');
			}
		}
	}

    public function hapus($id)
	{
		if ($this->session->userdata('username') == "") {
			redirect(base_url());
		} else {
			$this->aparatur->delete($id);
			$this->session->set_flashdata('flash','Dihapus');
			redirect('aparatur');
		}
	}

}
