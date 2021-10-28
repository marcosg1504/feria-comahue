<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	
	public function __construct()
    {
        parent::__construct();
        $this->load->helper("cookie");
        $this->load->model("OrderModel", "order");
		$this->load->model("CookieModel", "cookie");
		$this->load->model("ProductModel", "product");
    }

    public function index()
	{
        $userid = $this->cookie->getCookie("userid");
        if($userid == ""){
            redirect(base_url("login"));
        }
        $data["pedidos"] = $this->order->lists($userid);
        $this->load->view("layout/header");
        $this->load->view("user/home", $data);
		$this->load->view("layout/footer");
    }

    public function orderdetail($pedidoid)
    {
        $usuarioid = $this->cookie->getCookie("userid");
        if($usuarioid == ""){
            redirect(base_url("login"));
        }
        $data["usuario"] = $this->order->getuserbyid($usuarioid);
        $data["pedido"] = $this->order->getbyid($pedidoid);
        $data["pedido_detalle"] = $this->order->getorderdetails($pedidoid);
        $this->load->view("layout/header");
        $this->load->view("user/orderdetail", $data);
		$this->load->view("layout/footer");
    }

}
