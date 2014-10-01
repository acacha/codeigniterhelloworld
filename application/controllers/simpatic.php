<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Simpatic extends CI_Controller {


	public function index()
	{
		$this->grettings('mon');
	}
	
	public function grettings($name) {
	         $data= array();		 
	         
	         $data['parametre1'] = $name;
	         
	         $this->load->view('grettings',$data);
	}
	
}

/* End of file simpatic.php */
/* Location: ./application/controllers/simpatic.php */