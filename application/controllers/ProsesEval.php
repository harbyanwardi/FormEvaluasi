<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProsesEval extends CI_Controller {

	function __construct()
	{
		 parent::__construct();
         $this->load->helper('form','url');
		 $this->load->model('M_eval');
	}

	public function index()
	{
		$data = array();
		$show = array(
			
			'instruktur'=> $this->instruktur());	
		$this->load->view('form_edit',$show);
	}
	
	
	public function instruktur(){
		$data = array('data'=> $this->M_eval->GetData('tr_instruktur'));
		$show = $this->load->view('component/instruktur',$data,TRUE);
		return $show;
	}

}
