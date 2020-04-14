<?php

class ApiWhatsapp extends CI_Model{
	public $tb = "doctor";

	public function index($true_day,$true_time){
		$data = $this->db->select('name,number')
						->where('day_1',$true_day)
						->where('time',$true_time)
						->or_where('day_2',$true_day)
						->get($this->tb);
		if ($data->num_rows() > 1) {
			return array(
				'data' => $data->result_array(),
				'rows' => 2
			);
		}else{
			return array(
				'data' => $data->row_array(),
				'rows' => 1
			);
		}
	}
	public function get_data(){
		return $this->db->select("name,day_1,time_1")->order_by("detect","ASC")->get("doctor_time")->result_array();
	}
	public function hari($hari){
		$data = $this->db->select("name,time_1")->where("day_1",$hari)->get("doctor_time")->result_array();
		return $data;
	}
}