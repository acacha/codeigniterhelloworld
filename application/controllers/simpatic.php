<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Simpatic extends CI_Controller {


	public function index()
	{
		$this->grettings('mon');
	}
	
	public function grettings($name) {
	         $data= array();		 
	         
	         $data['parametre1'] = $name;
	         $data['parametre2'] = $name;
	         $data['parametre3'] = $name;
	         
	         $this->load->view('saluda',$data);
	}
	
}

/* End of file simpatic.php */
/* Location: ./application/controllers/simpatic.php */