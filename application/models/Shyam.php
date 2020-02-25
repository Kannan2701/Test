<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shyam extends CI_Model{
	
	public function subject(){
		
		$this->db->from('subject');
		$result=$this->db->get();
		return $result->result_array();
	}
	
	
	public function register($data)
	{
		return $this->db->insert('students',$data);
	}
	
	public function apply($data)
	{  
		return $this->db->insert('apply',$data);
	} 
}
?>