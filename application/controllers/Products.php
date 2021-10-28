<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {
	
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
        $this->load->view("products");
		$this->load->view("layout/footer");
	}

	public function view($productoid)
	{
		$data["productoid"] = $productoid;
		$data["producto"] = $this->product->getbyid($productoid);
		$this->load->view("layout/header", $data);
        $this->load->view("productview");
		$this->load->view("layout/footer");
	}
}
