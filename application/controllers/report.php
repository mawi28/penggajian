<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends CI_Controller {
public function __construct()
{
	parent::__construct();
	$this->load->model('M_gaji');
}
	public function exel()
	{
		$data = $this->M_gaji->tampil_data();
		$this->load->view('laporan/excel' , ['data'=>$data]);
	}
}