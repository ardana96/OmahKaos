<?php
if (!  defined('BASEPATH')) exit ('No direct script access allowed');

class Total_model extends CI_Model{

	function total_view(){
		$sql = "SELECT *
		FROM s_total";

		return $this->db->query($sql)->result();
	}


}

?>