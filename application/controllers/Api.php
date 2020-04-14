<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Api extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('ApiWhatsapp');
	}

	public function index(){
		$day = date('l');
		$time = date('H');
		$true_time = NULL;
		$true_day = NULL;
		switch ($time) {
			case $time >= 7 && $time <=11:
				$true_time = 1;
				break;
			case $time >=11  && $time <=17:
				$true_time = 2;
				break;
			case $time > 17 && $time <=20:
				$true_time = 3;
				break;
			default:break;
		}

		switch ($day) {
			case 'Sunday':
				$true_day = 1;
				break;
			case 'Monday':
				$true_day = 2;
				break;
			case 'Tuesday':
				$true_day = 3;
				break;
			case 'Wednesday':
				$true_day = 4;
				break;
			case 'Thursday':
				$true_day = 5;
				break;
			case 'Friday':
				$true_day = 6;
				break;
			case 'Saturday':
				$true_day = 7;
				break;
			
			default:break;
		}

		$data = $this->ApiWhatsapp->index($true_day,$true_time);
		echo json_encode($data);
	}
}