<?php 

	class Sejarah_model extends CI_Model
	{
		
		public function getAllSejarah()
		{
			return $this->db->get('sejarah')->result_array();
		}

		public function getSejarahById($id)
		{
			return $this->db->get_where('sejarah', ['id' => $id])->row_array();
		}

		public function add()
		{
			$this->db->set('sejarah', $this->input->post('sejarah'));
			$this->db->insert('sejarah');
		}

		public function update()
		{
			$this->db->set('sejarah', $this->input->post('sejarah'));
			$this->db->where('id', $this->input->post('id'));
			$this->db->update('sejarah');
		}
		
		public function delete($id)
		{
			$this->db->delete('sejarah', ['id' => $id]);
		}
	}
?>