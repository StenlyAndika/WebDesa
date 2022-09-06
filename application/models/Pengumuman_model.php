<?php 

	class Pengumuman_model extends CI_Model
	{
		
		public function getAllPengumuman()
		{
			return $this->db->get('pengumuman')->result_array();
		}

		public function getPengumumanById($id)
		{
			return $this->db->get_where('pengumuman', ['id' => $id])->row_array();
		}

		public function add()
		{
			$upload_image = $_FILES['namafile']['name'];

			if (!is_dir('./upload/pengumuman/')) {
				mkdir('./upload/pengumuman/', 0777, true);
			}

			if ($upload_image) {
				$config['allowed_types'] = 'jpg|png|jpeg|pdf';
				$config['upload_path'] = './upload/pengumuman/';

				$this->load->library('upload', $config);

				if ($this->upload->do_upload('namafile')) {
					$new_image = $this->upload->data('file_name');
					$this->db->set('namafile', $new_image);
				} else {
					echo $this->upload->display_errors();
				}
			}

			$this->db->set('judul', $this->input->post('judul'));
			$this->db->insert('pengumuman');
		}

		public function update()
		{
			$upload_image = $_FILES['namafile']['name'];

			if (!is_dir('./upload/pengumuman/')) {
				mkdir('./upload/pengumuman/', 0777, true);
			}
			
			if ($upload_image) {
				$config['allowed_types'] = 'jpg|png|jpeg|pdf';
				$config['upload_path'] = './upload/pengumuman/';

				$this->load->library('upload', $config);

				if ($this->upload->do_upload('namafile')) {
					$new_image = $this->upload->data('file_name');
					$this->db->set('namafile', $new_image);
				} else {
					echo $this->upload->display_errors();
				}
			}
			
			$this->db->set('judul', $this->input->post('judul'));
			$this->db->where('id', $this->input->post('id'));
			$this->db->update('pengumuman');
		}
		
		public function delete($id)
		{
			$this->db->delete('pengumuman', ['id' => $id]);
		}
	}
?>