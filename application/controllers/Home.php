<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	
	public function __construct()
    {
        parent::__construct();
        $this->load->helper("cookie");
		$this->load->model("CookieModel", "cookie");
		$this->load->model("ProductModel", "product");
    }

	public function index()
	{
		$data["productos"] = $this->product->lists();
		$this->load->view("layout/header", $data);
        $this->load->view("home");
		$this->load->view("layout/footer");
	}
}
