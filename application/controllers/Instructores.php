<?php
class Instructores extends CI_Controller 
{
	 function __construct()
	{
		parent::__construct();
	}
	public function index(){
		$this->load->view ('header');
		$this->load->view ('instructores/index');
		$this->load->view ('footer');
	}
	//funcion que renderiza la vista nuevo
	public function nuevo(){
		$this->load->view('header');
		$this->load->view('instructores/nuevo');
		$this->load->view('fotter');
	}
}
?>
