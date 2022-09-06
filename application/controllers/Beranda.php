<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->model('Pengumuman_model', 'pengumuman');
		$this->load->model('Berita_model', 'berita');
		$this->load->model('Sejarah_model', 'sejarah');
		$this->load->model('Visimisi_model', 'visimisi');
		$this->load->model('Struktur_model', 'struktur');
		$this->load->model('Foto_model', 'foto');
		$this->load->model('Pelayanan_model', 'pelayanan');
		$this->load->model('Dokumen_model', 'dokumen');
		$this->load->model('Kontak_model', 'kontak');
	}
	
	public function index()
	{
		$data['instansi'] =  $this->db->get('instansi')->result_array();
		if ($this->session->userdata('username') != "") {
			$data['data'] = "dashboard";
			$data['kontak'] = $this->kontak->getAllKontak();
			$data['jmlkontak'] = $this->kontak->getJmlKontak();
			$this->load->view('template-admin/header', $data);
			$this->load->view('menu-admin/dashboard.php', $data);
			$this->load->view('template-admin/footer');
		} else {
			$data['berita'] = $this->berita->getAllBerita();
			$data['kepuasan'] =  $this->db->get('kepuasan')->result_array();
			$data['pengumuman'] = $this->pengumuman->getAllPengumuman();
			$this->load->view('template/header.php', $data);
			$this->load->view('template/news.php');
			$this->load->view('landing/berita.php', $data);
			$this->load->view('template/panel.php');
			$this->load->view('template/footer.php');
		}
	}

	public function detail($id)
	{
		$data['instansi'] =  $this->db->get('instansi')->result_array();
		if ($this->session->userdata('username') != "") {
			$data['data'] = "dashboard";
			$data['kontak'] = $this->kontak->getAllKontak();
			$data['jmlkontak'] = $this->kontak->getJmlKontak();
			$this->load->view('template-admin/header', $data);
			$this->load->view('template-admin/footer');
		} else {
			$data['kepuasan'] =  $this->db->get('kepuasan')->result_array();
			$data['berita3'] = $this->berita->getBeritaById($id);
			$data['berita'] = $this->berita->getAllBerita();
			$data['pengumuman'] = $this->pengumuman->getAllPengumuman();
			$data['berita2'] = $this->berita->getBeritaRandom();
			$this->load->view('template/header.php', $data);
			$this->load->view('template/news.php');
			$this->load->view('landing/detail_berita.php', $data);
			$this->load->view('template/panel.php');
			$this->load->view('template/footer.php');
		}
	}

	public function sejarah()
	{
		$data['instansi'] =  $this->db->get('instansi')->result_array();
		if ($this->session->userdata('username') != "") {
			$data['data'] = "dashboard";
			$data['kontak'] = $this->kontak->getAllKontak();
			$data['jmlkontak'] = $this->kontak->getJmlKontak();
			$this->load->view('template-admin/header', $data);
			$this->load->view('template-admin/footer');
		} else {
			$data['berita'] = $this->berita->getAllBerita();
			$data['kepuasan'] =  $this->db->get('kepuasan')->result_array();
			$data['pengumuman'] = $this->pengumuman->getAllPengumuman();
			$data['sejarah'] = $this->sejarah->getAllSejarah();
			$this->load->view('template/header.php', $data);
			$this->load->view('template/news.php');
			$this->load->view('menu-profil/sejarah.php', $data);
			$this->load->view('template/panel.php');
			$this->load->view('template/footer.php');
		}
	}

	public function visimisi()
	{
		$data['instansi'] =  $this->db->get('instansi')->result_array();
		if ($this->session->userdata('username') != "") {
			$data['data'] = "dashboard";
			$data['kontak'] = $this->kontak->getAllKontak();
			$data['jmlkontak'] = $this->kontak->getJmlKontak();
			$this->load->view('template-admin/header', $data);
			$this->load->view('template-admin/footer');
		} else {
			$data['berita'] = $this->berita->getAllBerita();
			$data['kepuasan'] =  $this->db->get('kepuasan')->result_array();
			$data['pengumuman'] = $this->pengumuman->getAllPengumuman();
			$data['visimisi'] = $this->visimisi->getAllVisiMisi();
			$this->load->view('template/header.php', $data);
			$this->load->view('template/news.php');
			$this->load->view('menu-profil/visimisi.php', $data);
			$this->load->view('template/panel.php');
			$this->load->view('template/footer.php');
		}
	}

	public function struktur()
	{
		$data['instansi'] =  $this->db->get('instansi')->result_array();
		if ($this->session->userdata('username') != "") {
			$data['data'] = "dashboard";
			$data['kontak'] = $this->kontak->getAllKontak();
			$data['jmlkontak'] = $this->kontak->getJmlKontak();
			$this->load->view('template-admin/header', $data);
			$this->load->view('template-admin/footer');
		} else {
			$data['berita'] = $this->berita->getAllBerita();
			$data['kepuasan'] =  $this->db->get('kepuasan')->result_array();
			$data['pengumuman'] = $this->pengumuman->getAllPengumuman();
			$data['struktur'] = $this->struktur->getAllStruktur();
			$this->load->view('template/header.php', $data);
			$this->load->view('template/news.php');
			$this->load->view('menu-profil/struktur.php', $data);
			$this->load->view('template/panel.php');
			$this->load->view('template/footer.php');
		}
	}

	public function foto()
    {
		$data['instansi'] =  $this->db->get('instansi')->result_array();
        if ($this->session->userdata('username') != "") {
			$data['data'] = "dashboard";
			$data['kontak'] = $this->kontak->getAllKontak();
			$data['jmlkontak'] = $this->kontak->getJmlKontak();
            $this->load->view('template-admin/header', $data);
			$this->load->view('template-admin/footer');
		} else {
			$data['berita'] = $this->berita->getAllBerita();
			$data['kepuasan'] =  $this->db->get('kepuasan')->result_array();
			$data['pengumuman'] = $this->pengumuman->getAllPengumuman();
            $data['foto'] = $this->foto->getAllFoto();
            $this->load->view('template/header.php', $data);
			$this->load->view('template/news.php');
            $this->load->view('menu-galeri/foto.php', $data);
			$this->load->view('template/panel.php');
            $this->load->view('template/footer.php');
        }
    }

	public function pelayanan()
    {
		$data['instansi'] =  $this->db->get('instansi')->result_array();
        if ($this->session->userdata('username') != "") {
			$data['data'] = "dashboard";
			$data['kontak'] = $this->kontak->getAllKontak();
			$data['jmlkontak'] = $this->kontak->getJmlKontak();
            $this->load->view('template-admin/header', $data);
			$this->load->view('template-admin/footer');
		} else {
			$data['berita'] = $this->berita->getAllBerita();
			$data['kepuasan'] =  $this->db->get('kepuasan')->result_array();
			$data['pengumuman'] = $this->pengumuman->getAllPengumuman();
            $data['pelayanan'] = $this->pelayanan->getAllPelayanan();
            $this->load->view('template/header.php', $data);
			$this->load->view('template/news.php');
            $this->load->view('menu-pelayanan/pelayanan.php', $data);
			$this->load->view('template/panel.php');
            $this->load->view('template/footer.php');
        }
    }

	public function detail_layanan($id)
    {
		$data['instansi'] =  $this->db->get('instansi')->result_array();
        if ($this->session->userdata('username') != "") {
			$data['data'] = "dashboard";
			$data['kontak'] = $this->kontak->getAllKontak();
			$data['jmlkontak'] = $this->kontak->getJmlKontak();
            $this->load->view('template-admin/header', $data);
			$this->load->view('template-admin/footer');
		} else {
			$data['berita'] = $this->berita->getAllBerita();
			$data['kepuasan'] =  $this->db->get('kepuasan')->result_array();
			$data['pengumuman'] = $this->pengumuman->getAllPengumuman();
            $data['pelayanan'] = $this->pelayanan->getPelayananById($id);
            $this->load->view('template/header.php', $data);
			$this->load->view('template/news.php');
            $this->load->view('menu-pelayanan/detail.php', $data);
			$this->load->view('template/panel.php');
            $this->load->view('template/footer.php');
        }
    }

	public function dokumen()
    {
		$data['instansi'] =  $this->db->get('instansi')->result_array();
		if ($this->session->userdata('username') != "") {
			$data['data'] = "dashboard";
			$data['kontak'] = $this->kontak->getAllKontak();
			$data['jmlkontak'] = $this->kontak->getJmlKontak();
			$this->load->view('template-admin/header', $data);
			$this->load->view('template-admin/footer');
		} else {
			$data['berita'] = $this->berita->getAllBerita();
			$data['kepuasan'] =  $this->db->get('kepuasan')->result_array();
			$data['pengumuman'] = $this->pengumuman->getAllPengumuman();
			$data['keysearch'] = "";
			$this->load->view('template/header.php', $data);
			$this->load->view('template/news.php');
			$this->load->view('menu-informasi/dokumen.php', $data);
			$this->load->view('template/panel.php');
			$this->load->view('template/footer.php');
		}
    }

	public function cari()
    {
		$data['instansi'] =  $this->db->get('instansi')->result_array();
		if ($this->session->userdata('username') != "") {
			$data['data'] = "dashboard";
			$data['kontak'] = $this->kontak->getAllKontak();
			$data['jmlkontak'] = $this->kontak->getJmlKontak();
			$this->load->view('template-admin/header', $data);
			$this->load->view('template-admin/footer');
		} else {
			$data['berita'] = $this->berita->getAllBerita();
			$data['kepuasan'] =  $this->db->get('kepuasan')->result_array();
			$data['keysearch'] = $this->input->post('cari');
			$this->load->view('template/header.php', $data);
			$this->load->view('template/news.php');
			$this->load->view('menu-informasi/dokumen.php', $data);
			$this->load->view('template/panel.php');
			$this->load->view('template/footer.php');
		}
    }

	public function pengumuman()
	{
		$data['instansi'] =  $this->db->get('instansi')->result_array();
		if ($this->session->userdata('username') != "") {
			$data['data'] = "dashboard";
			$data['kontak'] = $this->kontak->getAllKontak();
			$data['jmlkontak'] = $this->kontak->getJmlKontak();
			$this->load->view('template-admin/header', $data);
			$this->load->view('template-admin/footer');
		} else {
			$data['berita'] = $this->berita->getAllBerita();
			$data['kepuasan'] =  $this->db->get('kepuasan')->result_array();
			$data['pengumuman'] = $this->pengumuman->getAllPengumuman();
			$this->load->view('template/header.php', $data);
			$this->load->view('template/news.php');
			$this->load->view('landing/pengumuman.php', $data);
			$this->load->view('template/panel.php');
			$this->load->view('template/footer.php');
		}
	}

}
