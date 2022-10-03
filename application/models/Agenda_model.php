<?php 

	class Agenda_model extends CI_Model
	{
		
		public function getAllAgenda()
		{
			$this->db->from('agenda');
			$this->db->order_by("tgl", "desc");
			$query = $this->db->get();
			return $query->result_array();
		}

		public function getLimitAgenda()
		{
			$this->db->from('agenda');
			$this->db->order_by('tgl', 'desc');
			$this->db->limit(3);
			$query = $this->db->get();
			return $query->result_array();
		}

		public function getAgendaById($id)
		{
			return $this->db->get_where('agenda', ['id' => $id])->row_array();
		}

		public function add()
		{
			$this->db->set('tgl', $this->input->post('tgl'));
			$this->db->set('jam', $this->input->post('jam'));
			$this->db->set('kegiatan', $this->input->post('kegiatan'));
			$this->db->set('lokasi', $this->input->post('lokasi'));
			$this->db->insert('agenda');
		}

		public function update()
		{
			$this->db->set('tgl', $this->input->post('tgl'));
			$this->db->set('jam', $this->input->post('jam'));
			$this->db->set('kegiatan', $this->input->post('kegiatan'));
			$this->db->set('lokasi', $this->input->post('lokasi'));
			$this->db->where('id', $this->input->post('id'));
			$this->db->update('agenda');
		}
		
		public function delete($id)
		{
			$this->db->delete('agenda', ['id' => $id]);
		}
	}
?>