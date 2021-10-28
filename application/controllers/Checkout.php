<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Checkout extends CI_Controller {
	
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
            redirect(base_url("login?from=checkout"));
        }
        $productids = $this->cookie->getCookie("productids");
		if($productids == "")
			$productids = "0";
		$query = "SELECT * FROM t_productos WHERE id IN(" . $productids . ")";
		$data["productos"] = $this->db->query($query)->result();
        $this->load->view("layout/header", $data);
        $this->load->view("checkout");
		$this->load->view("layout/footer");
    }

    public function placeorder()
    {
        $dynamiclink = $this->order->save();
        redirect(base_url("checkout/payment/" . $dynamiclink));
    }

    public function payment($dynamiclink)
    {
        $data["pedido"] = $this->order->getbydynamiclink($dynamiclink);
        $data["direccion"] = $this->order->getaddressbyid($data["pedido"]->direccionid);
        $data["pedido_detalle"] = $this->order->gett_pedidos_detalles($data["pedido"]->usuarioid);
        $data["usuario"] = $this->order->getuserbyid($data["pedido"]->usuarioid);
        $this->load->view("layout/header", $data);
        $this->load->view("payment");
		$this->load->view("layout/footer");
    }

    public function successrazorpayment()
    {
        $link_dinamico = $this->input->post("dynamiclink");
        $link_exito = $this->input->post("successlink");
     
        $order = $this->order->getbydynamiclink($link_dinamico);
        $query = "UPDATE t_pedidos SET estado_pedido = 'Pendiente', estado_pago = 'Pagado' WHERE id = " . $order->id;
        $this->db->query($query);

        $query = "UPDATE t_pedidos_detalles SET status = 'Pendiente' WHERE orderid = " . $order->id;
        $this->db->query($query);

        $subject = "Your order placed.";
        $body = "Hello you order is placed.";
        //Customer 1 mail
        //Vendor / Merchant 1 mail
        //Send mail
        redirect(base_url("user"));
    }
}
