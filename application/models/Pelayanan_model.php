<?php 

	class Pelayanan_model extends CI_Model
	{
		
		public function getAllPelayanan()
		{
			return $this->db->get('pelayanan')->result_array();
		}

		public function getPelayananById($id)
		{
			return $this->db->get_where('pelayanan', ['id' => $id])->row_array();
		}

		public function add()
		{
			$upload_image = $_FILES['gambar']['name'];
			
			if (!is_dir('./upload/pelayanan/')) {
				mkdir('./upload/pelayanan/', 0777, true);
			}

			if ($upload_image) {
				$config['allowed_types'] = 'jpg|png|jpeg|pdf';
				$config['upload_path'] = './upload/pelayanan/';

				$this->load->library('upload', $config);

				if ($this->upload->do_upload('gambar')) {
					$new_image = $this->upload->data('file_name');
					$this->db->set('gambar', $new_image);
				} else {
					echo $this->upload->display_errors();
				}
			}

			$this->db->set('jenis', $this->input->post('jenis'));
			$this->db->set('standar', $this->input->post('standar'));
			$this->db->insert('pelayanan');
		}

		public function update()
		{
			$upload_image = $_FILES['gambar']['name'];

			if (!is_dir('./upload/pelayanan/')) {
				mkdir('./upload/pelayanan/', 0777, true);
			}

			if ($upload_image) {
				$config['allowed_types'] = 'jpg|png|jpeg|pdf';
				$config['upload_path'] = './upload/pelayanan/';

				$this->load->library('upload', $config);

				if ($this->upload->do_upload('gambar')) {
					$new_image = $this->upload->data('file_name');
					$this->db->set('gambar', $new_image);
				} else {
					echo $this->upload->display_errors();
				}
			}
			
			$this->db->set('jenis', $this->input->post('jenis'));
			$this->db->set('standar', $this->input->post('standar'));
			$this->db->where('id', $this->input->post('id'));
			$this->db->update('pelayanan');
		}
		
		public function delete($id)
		{
			$this->db->delete('pelayanan', ['id' => $id]);
		}
	}
?>