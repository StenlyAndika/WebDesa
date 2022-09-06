<?php 

	class Foto_model extends CI_Model
	{
		
		public function getAllFoto()
		{
			$this->db->from('foto');
			$this->db->order_by("kegiatan", "desc");
			$query = $this->db->get(); 
			return $query->result_array();
		}

		public function getFotoById($id)
		{
			return $this->db->get_where('foto', ['id' => $id])->row_array();
		}

		public function add()
		{
			if (!is_dir('./upload/foto/'.$this->input->post('tgl'))) {
				mkdir('./upload/foto/'.$this->input->post('tgl'), 0777, true);
			}

			$config['upload_path']          = './upload/foto/'.$this->input->post('tgl');
			$config['allowed_types']        = 'jpg|png|jpeg';
			$this->load->library('upload',$config);

			for($i = 0; $i < count($_FILES['namafile']['name']); $i++)
			{
				if(!empty($_FILES['namafile']['name'][$i])){
	
					$_FILES['file']['name'] = $_FILES['namafile']['name'][$i];
					$_FILES['file']['type'] = $_FILES['namafile']['type'][$i];
					$_FILES['file']['tmp_name'] = $_FILES['namafile']['tmp_name'][$i];
					$_FILES['file']['error'] = $_FILES['namafile']['error'][$i];
					$_FILES['file']['size'] = $_FILES['namafile']['size'][$i];
		
					if($this->upload->do_upload('file')){
						$uploadData = $this->upload->data();
						$data['namafile'] = $uploadData['file_name'];
						$data['tgl'] = $this->input->post('tgl');
						$data['kegiatan'] = $this->input->post('kegiatan');
						$this->db->insert('foto',$data);
					} else {
						var_dump($this->upload->display_errors());
						exit();
					}
				}
			}
		}

		public function delete($id)
		{
			$this->db->delete('foto', ['id' => $id]);
		}
	}
?>