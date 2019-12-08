<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_eval extends CI_Model {

	
	public function GetData($tableName,$where="")
	{
		$data = $this->db->query('select * from '.$tableName.$where);
		return $data->result_array();
	}
	public function GetData2($table)
	{
		$data = $this->db->get($table);
		if($data->num_rows() > 0){
			return $data->result_array();
		}else{
			return false;
		}
	}
	function post_training($result = array())
	{
	$total_array = count($result);
	 
		if($total_array != 0)
		{
			$this->db->insert_batch('nilai_training', $result);
		}
	}

	public function InsertData($tabelName,$data){
		$res = $this->db->insert($tabelName,$data);
		return $res;
	}

	public function DeleteData($tabelName,$where){
		$res = $this->db->delete($tabelName,$where);
		return $res;
	}
	
	public function UpdateData($tabelName,$data,$where){
		$res = $this->db->update($tabelName,$data,$where);
		return $res;
	}
	function Hitung($tableName,$where=""){
		$data = $this->db->query('select * from '.$tableName.$where);
		$total = $data->num_rows(); 
		return $total;
	}

}
