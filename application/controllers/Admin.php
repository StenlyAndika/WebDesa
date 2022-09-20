<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('Admin_model', 'admin');
	}

	public function index()
    {
		if ($this->session->userdata('username') == "") {
			redirect(base_url());
		} else {
			$data['data'] = "admin";
			$data['instansi'] =  $this->db->get('instansi')->result_array();
			$data['admin'] = $this->admin->getAllAdmin();
			$this->load->view('template-admin/header.php', $data);
			$this->load->view('menu-admin/admin/index.php', $data);
			$this->load->view('template-admin/footer.php');
		}
    }

    public function tambah()
	{
		if ($this->session->userdata('username') == "") {
			redirect(base_url());
		} else {
			$data['data'] = "admin";
			$data['instansi'] =  $this->db->get('instansi')->result_array();
			$this->form_validation->set_rules('username', 'username', 'required');
			$this->form_validation->set_rules('nama', 'nama', 'required');
			$this->form_validation->set_rules('password', 'password', 'required');

			if ( $this->form_validation->run() == FALSE ) {
				$this->load->view('template-admin/header', $data);
				$this->load->view('menu-admin/admin/tambah');
				$this->load->view('template-admin/footer');
			} else {
				$this->admin->add();
				$this->session->set_flashdata('flash','Ditambahkan');
				redirect('admin');
			}
		}
	}

    public function ubah($id)
	{
		if ($this->session->userdata('username') == "") {
			redirect(base_url());
		} else {
			$data['data'] = "admin";
			$data['instansi'] =  $this->db->get('instansi')->result_array();
			$data['admin'] = $this->admin->getAdminById($id);
			$this->form_validation->set_rules('nama', 'nama', 'required');

			if ( $this->form_validation->run() == FALSE ) {
				$this->load->view('template-admin/header', $data);
				$this->load->view('menu-admin/admin/ubah', $data);
				$this->load->view('template-admin/footer');
			} else {
				$this->admin->update();
				$this->session->set_flashdata('flash','Diupdate');
				redirect('admin');
			}
		}
	}

    public function hapus($id)
	{
		if ($this->session->userdata('username') == "") {
			redirect(base_url());
		} else {
			$this->admin->delete($id);
			$this->session->set_flashdata('flash','Dihapus');
			redirect('admin');
		}
	}

}
