<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelayanan extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('form_validation');
        $this->load->model('Pelayanan_model', 'pelayanan');
    }

    public function index()
    {
    	if ($this->session->userdata('username') == "") {
			redirect(base_url());
		} else {
			$data['data'] = "pelayanan";
			$data['instansi'] =  $this->db->get('instansi')->result_array();
	        $data['pelayanan'] = $this->pelayanan->getAllPelayanan();
	        $this->load->view('template-admin/header.php', $data);
	        $this->load->view('menu-admin/pelayanan/index.php', $data);
	        $this->load->view('template-admin/footer.php');
	    }
    }

    public function tambah()
	{
		if ($this->session->userdata('username') == "") {
			redirect(base_url());
		} else {
			$data['data'] = "pelayanan";
			$data['instansi'] =  $this->db->get('instansi')->result_array();
			$this->form_validation->set_rules('jenis', 'jenis', 'required');

			if ( $this->form_validation->run() == FALSE ) {
				$this->load->view('template-admin/header', $data);
				$this->load->view('menu-admin/pelayanan/tambah');
				$this->load->view('template-admin/footer');
			} else {
				$this->pelayanan->add();
				$this->session->set_flashdata('flash','Ditambahkan');
				redirect('pelayanan');
			}
		}
	}

    public function ubah($id)
	{
		if ($this->session->userdata('username') == "") {
			redirect(base_url());
		} else {
			$data['data'] = "pelayanan";
			$data['instansi'] =  $this->db->get('instansi')->result_array();
	        $data['pelayanan'] = $this->pelayanan->getPelayananById($id);
	        
			$this->form_validation->set_rules('jenis', 'jenis', 'required');

			if ( $this->form_validation->run() == FALSE ) {
				$this->load->view('template-admin/header', $data);
				$this->load->view('menu-admin/pelayanan/ubah', $data);
				$this->load->view('template-admin/footer');
			} else {
				$this->pelayanan->update();
				$this->session->set_flashdata('flash','Diupdate');
				redirect('pelayanan');
			}
		}
	}

	public function detail($id)
	{
		if ($this->session->userdata('username') == "") {
			redirect(base_url());
		} else {
			$data['data'] = "pelayanan";
			$data['instansi'] =  $this->db->get('instansi')->result_array();
	        $data['pelayanan'] = $this->pelayanan->getPelayananById($id);

			$this->load->view('template-admin/header', $data);
			$this->load->view('menu-admin/pelayanan/detail', $data);
			$this->load->view('template-admin/footer');
		}
	}

    public function hapus($id)
	{
		if ($this->session->userdata('username') == "") {
			redirect(base_url());
		} else {
			$this->pelayanan->delete($id);
			$this->session->set_flashdata('flash','Dihapus');
			redirect('pelayanan');
		}
	}
}
?>