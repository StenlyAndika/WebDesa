<?php 

	class Kepuasan_model extends CI_Model
	{
		
		public function getAllKepuasan()
		{
			$this->db->from('kepuasan');
			$this->db->order_by('tahun', 'DESC');
			$this->db->limit(5);
			$query = $this->db->get();
			return $query->result_array();
		}

		public function getKepuasanById($id)
		{
			return $this->db->get_where('kepuasan', ['tahun' => $id])->row_array();
		}

		public function add()
		{
			$this->db->set('tahun', $this->input->post('tahun'));
			$this->db->set('nilai', $this->input->post('nilai'));
			$this->db->set('predikat', $this->input->post('predikat'));
			$this->db->insert('kepuasan');
		}

		public function update()
		{
			$this->db->set('nilai', $this->input->post('nilai'));
			$this->db->set('predikat', $this->input->post('predikat'));
			$this->db->where('tahun', $this->input->post('tahun'));
			$this->db->update('kepuasan');
		}
		
		public function delete($id)
		{
			$this->db->delete('kepuasan', ['tahun' => $id]);
		}
	}
?>