<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends Application {

	/**
	 * Index Page for this controller.
	 */
	public function index()
	{
		//$this->load->view('welcome');
                $this->data['pagebody'] = 'welcome';
                $this->render();
	}
}
