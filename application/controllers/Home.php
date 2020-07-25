<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct()
    {
        parent::__construct();

       		$this->load->helper('url');
       		$this->load->library('session');

        //$this->load->library('curl');
        //$this->load->helper('form');

    }
	// Main pages
	public function index()
	{
		$this->load->view('includes/header');
		$this->load->view('index');
		$this->load->view('includes/footer');
	}


	public function login()
	{
		// $this->load->view('includes/header');
		$this->load->view('login');
		// $this->load->view('includes/footer');
	}


	public function signup()
	{
		// $this->load->view('includes/header');
		$this->load->view('signup');
		// $this->load->view('includes/footer');
	}


	public function about()
	{
		$this->load->view('includes/header');
		$this->load->view('about');
		$this->load->view('includes/footer');
	}

	public function product()
	{
		$this->load->view('includes/header');
		$this->load->view('product');
		$this->load->view('includes/footer');
	}


	public function contact()
	{
		$this->load->view('includes/header');
		$this->load->view('contact');
		$this->load->view('includes/footer');
	}


}

