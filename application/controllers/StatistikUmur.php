<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class StatistikUmur extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('StatistikUmur_model', 'umur');
	}

	public function index()
    {
		if ($this->session->userdata('username') == "") {
			redirect(base_url());
		} else {
			$data['instansi'] =  $this->db->get('instansi')->result_array();
			$data['statistikumur'] = $this->umur->getAllStatistikUmur();
			$this->load->view('template-admin/header.php', $data);
			$this->load->view('menu-admin/statistikumur/index.php', $data);
			$this->load->view('template-admin/footer.php');
		}
    }

    public function tambah()
	{
		if ($this->session->userdata('username') == "") {
			redirect(base_url());
		} else {
			$data['instansi'] =  $this->db->get('instansi')->result_array();
			$this->form_validation->set_rules('umur', 'umur', 'required');
			
			if ( $this->form_validation->run() == FALSE ) {
				$data['umur'] = ["", "Di bawah 1 Tahun", "1 s/d 10 Tahun", "11 s/d 20 Tahun", "21 s/d 30 Tahun", "31 s/d 40 Tahun", "41 s/d 50 Tahun", "Diatas 50 Tahun"];
				$this->load->view('template-admin/header', $data);
				$this->load->view('menu-admin/statistikumur/tambah');
				$this->load->view('template-admin/footer');
			} else {
				$this->umur->add();
				$this->session->set_flashdata('flash','Ditambahkan');
				redirect('statistikumur');
			}
		}
	}

    public function ubah($id)
	{
		if ($this->session->userdata('username') == "") {
			redirect(base_url());
		} else {
			$data['instansi'] =  $this->db->get('instansi')->result_array();
			$data['statistikumur'] = $this->umur->getStatistikUmurById($id);
			$this->form_validation->set_rules('umur', 'umur', 'required');

			if ( $this->form_validation->run() == FALSE ) {
				$data['umur'] = ["", "Di bawah 1 Tahun", "1 s/d 10 Tahun", "11 s/d 20 Tahun", "21 s/d 30 Tahun", "31 s/d 40 Tahun", "41 s/d 50 Tahun", "Diatas 50 Tahun"];
				$this->load->view('template-admin/header', $data);
				$this->load->view('menu-admin/statistikumur/ubah', $data);
				$this->load->view('template-admin/footer');
			} else {
				$this->umur->update();
				$this->session->set_flashdata('flash','Diupdate');
				redirect('statistikumur');
			}
		}
	}

    public function hapus($id)
	{
		if ($this->session->userdata('username') == "") {
			redirect(base_url());
		} else {
			$this->umur->delete($id);
			$this->session->set_flashdata('flash','Dihapus');
			redirect('statistikumur');
		}
	}

}
