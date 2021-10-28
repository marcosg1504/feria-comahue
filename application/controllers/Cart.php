<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller {
	
	public function __construct()
    {
        parent::__construct();
        $this->load->helper("cookie");
		$this->load->model("CookieModel", "cookie");
		$this->load->model("ProductModel", "product");
    }

	public function index()
	{
		$productids = $this->cookie->getCookie("productids");
		if($productids == "")
			$productids = "0";
		$query = "SELECT * FROM t_productos WHERE id IN(" . $productids . ")";
		$data["productos"] = $this->db->query($query)->result();
		$this->load->view("layout/header", $data);
        $this->load->view("cart");
		$this->load->view("layout/footer");
	}
}
