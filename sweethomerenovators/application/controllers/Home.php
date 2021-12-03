<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 *//*
	function __construct()
	{
		parent::__construct();
    $base_url = site_url();
		//$this->load->driver('Minify');
    $this->load->model('Minify');
    $csss = $this->Minify->combine_directory('assets/css/');
    $this->Minify->save_file($csss, $base_url . 'assets/min/compressed.css');
    $jss = $this->Minify->combine_directory('assets/js/');
    $this->Minify->save_file($jss, $base_url . 'assets/min/compressed.js');
	}*/
  
	public function index()
	{
		$this->load->view('home');
	}
}
