<?php if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Apptrans extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->library('session');
		$this->load->library('parser');
		$this->load->helper('form');
		$this->load->helper('file');
		$this->load->helper('url');
		$this->load->helper('download');
                $this->url_site = base_url();
                $this->url_base = 'index.php';

	}

	public function index() {
		$this->template->set('title', 'My website');
        	$this->template->load('layouts/main', 'home');
	}

	public function web() {

	}

	function navegacion($uri = null, $uri2 = null, $uri3 = null) {

		if (!$uri)
			$this->inicio();
		else {
			switch ($uri) {
			case 'home':
				$this->inicio();
				break;
                        case 'vodka':
                        case 'cerveza':
                        case 'ron':
                        case 'jugo':
                               $this->listado($uri);
                               break;
			default:
				$this->inicio();
				break;
			}
		}
	}

	function inicio() {
		$datos = array('url' => $this->url_site . $this->url_base);
		$prueba = 'estos es prueba';
		$html = $this->parser->parse('inicio', $datos, TRUE);
		$this->output->set_output($html);

	}

        function listado($opcion){
                switch($opcion){
                        case 'ron':
                                $items = array(
                                                array('nombre' => 'Abuelo', 'aux_url' => 'abuelo'),
                                                array('nombre' => 'Bacardi', 'aux_url' => 'bacardi'),
                                                array('nombre' => 'Cacique', 'aux_url' => 'cacique'),
                                                array('nombre' => 'Habana', 'aux_url' => 'habana')
                                                );
                                break;
                        case 'vodka':
                               $items = array(
                                                array('nombre' => 'Absolut', 'aux_url' => 'absolut'),
                                                array('nombre' => 'Eristoff', 'aux_url' => 'eristoff'),
                                                array('nombre' => 'Smirnoff', 'aux_url' => 'smirnoff'),
                                                array('nombre' => 'Sky', 'aux_url' => 'sky')
                                                );
                                break;
                        case 'cerveza':
                               $items = array(
                                                array('nombre' => 'Austral', 'aux_url' => 'austral'),
                                                array('nombre' => 'Corona', 'aux_url' => 'corona'),
                                                array('nombre' => 'Cristal', 'aux_url' => 'cristal'),
                                                array('nombre' => 'Kunstmann', 'aux_url' => 'kunstmann')
                                                );

                                break;
                        case 'jugo':
                               $items = array(
                                                array('nombre' => 'Arandano', 'aux_url' => 'arandano'),
                                                array('nombre' => 'Chirimoya', 'aux_url' => 'chirimoya'),
                                                array('nombre' => 'Frutilla', 'aux_url' => 'frutilla'),
                                                array('nombre' => 'Mango', 'aux_url' => 'mango')
                                                );
                                break;
                }
                $datos = array(
                                'url' => $this->url_site.$this->url_base,
                                'url_base' => $this->url_site,
                                'titulo' => $opcion,
                                'items' => $items
                        );
                $html = $this->parser->parse('listado', $datos, TRUE);
                $this->output->set_output($html);
        }

}
/* Fin clase */
