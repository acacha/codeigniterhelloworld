<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Simpatic extends CI_Controller {

	function __construct() {

		parent::__construct();
		$this->config->load('codeigniterhelloworld');

		$this->load->helper('url');
	}


	public function index()
	{
		$this->grettings('mon');
	}

	public function form_example() {
	         $data= array();		 

	         $this->load->view('form_example',$data);
	}

	public function grettings_2() {
	         $data= array();		 

	         //echo $_GET;
	         
	         //var_export($_GET);
	         //print_r($_GET);
	         var_dump($_GET);

	         $nom = $this->input->get_post('nom');

	         $data['nom'] = $nom;

	         $this->load->view('grettings',$data);
	}
	
	public function grettings($name) {
	         $data= array();		 


	         $parametre_1 = $this->input->get('parametre1');

	         $data['parametre1'] = $name;
	         $data['parametre2'] = $this->config->item('academic_period');
	         
	         $this->load->view('grettings',$data);
	}
	
}

/* End of file simpatic.php */
/* Location: ./application/controllers/simpatic.php */