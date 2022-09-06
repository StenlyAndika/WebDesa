<?php 

	class Visimisi_model extends CI_Model
	{
		
		public function getAllVisiMisi()
		{
			return $this->db->get('visimisi')->result_array();
		}

		public function getVisiMisiById($id)
		{
			return $this->db->get_where('visimisi', ['id' => $id])->row_array();
		}

		public function add()
		{
			$this->db->set('visi', $this->input->post('visi'));
			$this->db->set('misi', $this->input->post('misi'));
			$this->db->insert('visimisi');
		}

		public function update()
		{
			$this->db->set('visi', $this->input->post('visi'));
			$this->db->set('misi', $this->input->post('misi'));
			$this->db->where('id', $this->input->post('id'));
			$this->db->update('visimisi');
		}
		
		public function delete($id)
		{
			$this->db->delete('visimisi', ['id' => $id]);
		}
	}
?>