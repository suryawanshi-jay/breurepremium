<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Checkout extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 */
	public function __construct()
    {
            parent::__construct();
            // Your own constructor code
            $this->layout->set_layout('main_layout');
    }

	public function index()
	{		
		$this->layout->view('checkout');
	}
}
