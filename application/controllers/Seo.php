<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Seo extends CI_Controller {

	public function home()
	{
        $this->load->view('css/cssfluxograma');
		$this->load->view('pages/fluxograma');
        $this->load->view('js/jsfluxograma');
	}
}
