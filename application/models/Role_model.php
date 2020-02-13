<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Role_model extends CI_Model
{
    
public function count_user_role(){
		$query = $this->db->get("user_role");
		return $query->num_rows();
    }
}