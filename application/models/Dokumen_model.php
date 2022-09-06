<?php 

	class Dokumen_model extends CI_Model
	{
		
		public function getAllDokumen()
		{
			return $this->db->get('dokumen')->result_array();
		}

		public function getAllDokumenSort()
		{
			$this->db->from('dokumen');
			$this->db->order_by("tahun", "desc");
			$query = $this->db->get(); 
			return $query->result_array();
		}

		public function getDokumenById($id)
		{
			return $this->db->get_where('dokumen', ['id' => $id])->row_array();
		}

		public function add()
		{
			$upload_image = $_FILES['namafile']['name'];

			if (!is_dir('./upload/dokumen/')) {
				mkdir('./upload/dokumen/', 0777, true);
			}

			if ($upload_image) {
				$config['allowed_types'] = 'pdf';
				$config['upload_path'] = './upload/dokumen/';

				$this->load->library('upload', $config);

				if ($this->upload->do_upload('namafile')) {
					$new_image = $this->upload->data('file_name');
					$this->db->set('namafile', $new_image);
				} else {
					echo $this->upload->display_errors();
				}
			}

			$this->db->set("tahun", $this->input->post('tahun'));
			$this->db->set("kategori", $this->input->post('kategori'));
			$this->db->set("keterangan", $this->input->post('keterangan'));
			$this->db->insert('dokumen');
		}

		public function update()
		{
			$upload_image = $_FILES['namafile']['name'];

			if ($upload_image) {
				$config['allowed_types'] = 'pdf';
				$config['upload_path'] = './upload/dokumen/';

				$this->load->library('upload', $config);

				if ($this->upload->do_upload('namafile')) {
					$new_image = $this->upload->data('file_name');
					$this->db->set('namafile', $new_image);
				} else {
					echo $this->upload->display_errors();
				}
			}
			
			$this->db->set("tahun", $this->input->post('tahun'));
			$this->db->set("kategori", $this->input->post('kategori'));
			$this->db->set("keterangan", $this->input->post('keterangan'));
			$this->db->where('id', $this->input->post('id'));
			$this->db->update('dokumen');
		}
		
		public function delete($id)
		{
			$this->db->delete('dokumen', ['id' => $id]);
		}
	}
?>