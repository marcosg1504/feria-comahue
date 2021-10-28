<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends CI_Controller {
	
	public function __construct()
    {
        parent::__construct();
        $this->load->helper("cookie");
		$this->load->model("CookieModel", "cookie");
		$this->load->model("ProductModel", "product");
    }

	public function index()
	{
        $this->cookie->clearCookie("userid");
        $this->cookie->clearCookie("usertpye");
        redirect(base_url());
    }
}