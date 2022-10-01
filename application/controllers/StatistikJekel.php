<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class StatistikJekel extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('StatistikJekel_model', 'sjkl');
	}

	public function index()
    {
		if ($this->session->userdata('username') == "") {
			redirect(base_url());
		} else {
			$data['instansi'] =  $this->db->get('instansi')->result_array();
			$data['statistikjekel'] = $this->sjkl->getAllStatistikJekel();
			$this->load->view('template-admin/header.php', $data);
			$this->load->view('menu-admin/statistikjekel/index.php', $data);
			$this->load->view('template-admin/footer.php');
		}
    }

    public function tambah()
	{
		if ($this->session->userdata('username') == "") {
			redirect(base_url());
		} else {
			$data['instansi'] =  $this->db->get('instansi')->result_array();
			$this->form_validation->set_rules('jekel', 'jekel', 'required');
			
			if ( $this->form_validation->run() == FALSE ) {
				$data['jekel'] = ["", "Laki-Laki", "Perempuan"];
				$this->load->view('template-admin/header', $data);
				$this->load->view('menu-admin/statistikjekel/tambah');
				$this->load->view('template-admin/footer');
			} else {
				$this->sjkl->add();
				$this->session->set_flashdata('flash','Ditambahkan');
				redirect('statistikjekel');
			}
		}
	}

    public function ubah($id)
	{
		if ($this->session->userdata('username') == "") {
			redirect(base_url());
		} else {
			$data['instansi'] =  $this->db->get('instansi')->result_array();
			$data['statistikjekel'] = $this->sjkl->getStatistikJekelById($id);
			$this->form_validation->set_rules('jekel', 'jekel', 'required');

			if ( $this->form_validation->run() == FALSE ) {
				$data['jekel'] = ["", "Laki-Laki", "Perempuan"];
				$data['jabatan'] = ["", "Kepala Desa", "Sekretaris Desa", "Bendahara", "Staff"];
				$this->load->view('template-admin/header', $data);
				$this->load->view('menu-admin/statistikjekel/ubah', $data);
				$this->load->view('template-admin/footer');
			} else {
				$this->sjkl->update();
				$this->session->set_flashdata('flash','Diupdate');
				redirect('statistikjekel');
			}
		}
	}

    public function hapus($id)
	{
		if ($this->session->userdata('username') == "") {
			redirect(base_url());
		} else {
			$this->sjkl->delete($id);
			$this->session->set_flashdata('flash','Dihapus');
			redirect('statistikjekel');
		}
	}

}
