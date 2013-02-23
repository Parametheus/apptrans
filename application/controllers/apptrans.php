<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Apptrans extends CI_Controller {

	var $url_site; //http://{}
	var $url_base; //http://url_site/{}
	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->library('parser');
		$this->load->helper('form');
		$this->load->helper('file');
		$this->load->helper('url');
		$this->load->helper('download');
		$this->url_site = base_url();
		$this->url_base = 'apptrans';
	}

	public function index($uri = null)
	{
  		$this->twiggy->display();
	}
	
	public function web() {
		
		
	}

	function navegacion($uri = null, $uri2 = null, $uri3 = null){

		if(!$uri)
			$this->inicio();
		else{
			switch($uri){
				case 'home':
					$this->inicio();
					break;
					//llenar con mas case en caso de mas opciones

				default:
					$this->inicio();
					break;
			}
		}
	}

	function inicio(){
		$datos = array(
				'url' => $this->url_site.$this->url_base
		);

		$html = $this->parser->parse('inicio', $datos, TRUE);
		$this->output->set_output($html);

	}

}
/* Fin clase */
