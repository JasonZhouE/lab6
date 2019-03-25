<?php namespace App\Controllers;

use CodeIgniter\Controller;

class Chroes extends Controller
{
	 function __construct() {
        parent::__construct();
        $this->load->model('dwarfs');
        $this->load->model('flags');
		$this->load->model('groups');
		$this->load->model('priorities');
		$this->load->model('sizes');
		$this->load->model('statuses');
		$this->load->model('tasks');
    }
	public function index()
	{
		return view('welcome_message');
	}

	//--------------------------------------------------------------------

}
