<?php

class Home extends Controller {
	public function __construct()
	{	
		// parent contrack
	} 
	public function index()
	{
		$data['title'] = 'Halaman Home';

		$this->view('templates/header', $data);
		$this->view('home/index', $data);
		$this->view('templates/footer');
	}
}