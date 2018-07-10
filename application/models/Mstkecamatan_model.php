<?php
class Mstkecamatan_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }
		
		public function get_negara()
		{
			$query = $this->db->get('mst_kecamatan');
			return $query->row_array();
		}
}