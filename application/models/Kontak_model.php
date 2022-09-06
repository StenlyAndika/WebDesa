<?php 

	class Kontak_model extends CI_Model
	{
		
		public function getAllKontak()
		{
			$this->db->from('pesan');
			$this->db->order_by("tgl", "desc");
			$query = $this->db->get();
			return $query->result_array();
		}

		public function getJmlKontak()
		{
			return $this->db->get('pesan')->num_rows();
		}

		public function getKontakById($id)
		{
			return $this->db->get_where('pesan', ['id' => $id])->row_array();
		}

		public function add()
		{
			$this->db->set('tgl', date('d-m-Y'));
			$this->db->set('email', $this->input->post('email'));
			$this->db->set('nama', $this->input->post('nama'));
			$this->db->set('pesan', $this->input->post('pesan'));
			$this->db->insert('pesan');
		}

		public function delete($id)
		{
			$this->db->delete('pesan', ['id' => $id]);
		}
	}
?>