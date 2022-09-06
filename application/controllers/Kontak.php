<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kontak extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('form_validation');
        $this->load->model('Kontak_model', 'kontak');
		$this->load->model('Kepuasan_model', 'kepuasan');
		$this->load->model('Pengumuman_model', 'pengumuman');
		$this->load->model('Berita_model', 'berita');
    }

	public function index()
	{
		$data['instansi'] =  $this->db->get('instansi')->result_array();
		if ($this->session->userdata('username') != "") {
			$data['pesan'] =  $this->db->get('pesan')->result_array();
			$this->load->view('template-admin/header', $data);
			$this->load->view('menu-admin/kontak/index.php', $data);
			$this->load->view('template-admin/footer');
		} else {
			$data['berita'] = $this->berita->getAllBerita();
			$data['pengumuman'] = $this->pengumuman->getAllPengumuman();
			$data['kepuasan'] =  $this->db->get('kepuasan')->result_array();
			$this->load->view('template/header.php', $data);
			$this->load->view('template/news.php');
			$this->load->view('menu-kontak/kontak.php', $data);
			$this->load->view('template/panel.php');
			$this->load->view('template/footer.php');
		}
	}

	public function daftar()
	{
		$data['instansi'] =  $this->db->get('instansi')->result_array();
		if ($this->session->userdata('username') != "") {
			$data['pesan'] =  $this->db->get('pesan')->result_array();
			$this->load->view('template-admin/header', $data);
			$this->load->view('menu-admin/kontak/index.php', $data);
			$this->load->view('template-admin/footer');
		}
	}

    public function kirim()
	{
		$data['instansi'] =  $this->db->get('instansi')->result_array();
		$this->form_validation->set_rules('nama', 'nama', 'required');
		$this->form_validation->set_rules('email', 'email', 'required');

		if ( $this->form_validation->run() == FALSE ) {
			redirect('kontak');
		} else {
			$this->kontak->add();
			$this->session->set_flashdata('flash','Dikirimkan');
			redirect('kontak');
		}
	}

	public function hapus($id)
	{
		$this->kontak->delete($id);
		$this->session->set_flashdata('flash','Dihapus');
		redirect('kontak');
	}
}
?>