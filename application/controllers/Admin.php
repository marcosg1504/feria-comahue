<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	
	public function __construct()
    {
        parent::__construct();
        $this->load->helper("cookie");
		$this->load->model("CookieModel", "cookie");
		$this->load->model("ProductModel", "product");
		$this->load->model("OrderModel", "order");
    }

	public function index()
	{
		$usertype = $this->cookie->getCookie("usertype");
		if($usertype == "admin")
		{
			redirect(base_url("admin/dashboard"));
		}
		$this->load->view('admin/login');
	}

	
	public function checklogin()
    {
        $correo = $this->input->post("correo");
        $contrasena = $this->input->post("contrasena");

        $this->db->where("correo", $correo);
        $this->db->where("contrasena", $contrasena);
        $result = $this->db->get("t_usuarios");
        if($result->num_rows() == 0){
            redirect(base_url("login?status=failed"));
        }
        else{
            $row = $result->row();
            $this->cookie->setCookie("userid_rol", $row->id_rol);
			$this->cookie->setCookie("userid", $row->id);
			$id_rol=$row->id_rol;
			if($id_rol == 1 ){
				//	echo "entraaaaaaa";
				$this->cookie->setCookie("usertype", "admin");
					redirect(base_url("admin/dashboard"));
				}	
			elseif($id_rol == 2 ){
			//	echo "entraaaaaaa";
			$this->cookie->setCookie("usertype", "admin");
				redirect(base_url("admin/dashboard"));
			}	else{			
					redirect(base_url("admin"));
			}
           // $this->cookie->setCookie("usertype", "admin");
		//	if($username == "admin" && $contrasena == "admin")
			//	{
			//		$this->cookie->setCookie("usertype", "admin");
			// 		$this->cookie->setCookie("userid", "0");
				
		//	 	}
		//	 	else{			
			// 		redirect(base_url("admin"));
        }
    }

	
	// public function checklogin()
	// {

		
	// 	$username = $this->input->post("username");
	// 	$contrasena = $this->input->post("contrasena");
	// 	if($username == "admin" && $contrasena == "admin")
	// 	{
	// 		$this->cookie->setCookie("usertype", "admin");
	// 		$this->cookie->setCookie("userid", "0");
	// 		redirect(base_url("admin/dashboard"));
	// 	}
	// 	else{			
	// 		redirect(base_url("admin"));
	// 	}
	// }

	public function validate()
	{
		$usertype = $this->cookie->getCookie("usertype");
		if($usertype != "admin")
		{
			redirect(base_url());
		}
	}

	public function dashboard()
	{
		$this->validate();
		
		$this->load->view('admin/layout/header');
		$this->load->view('admin/layout/sidebar');
		$this->load->view('admin/dashboard');
		$this->load->view('admin/layout/footer');
	}

	//MUESTRA PRODUCTOS FERIANTE admin/products
	public function products()
	{
		$this->validate();
		$userid = $this->cookie->getCookie("userid");
		echo "acaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa";
	echo print_r($userid);
		$data['result'] = $this->product->lists_filter();
		
		$this->load->view('admin/layout/header', $data);
		$this->load->view('admin/layout/sidebar');
		$this->load->view('admin/products');
		$this->load->view('admin/layout/footer');
	}

	public function product($id)
	{
		$this->validate();
		$data["id"] = $id;
		$data["producto"] = $this->product->getbyid($id);
		$this->load->view('admin/layout/header', $data);
		$this->load->view('admin/layout/sidebar');
		$this->load->view('admin/product');
		$this->load->view('admin/layout/footer');
	}

	public function guardar_producto()
	{
		$this->validate();
		$this->product->save();
		redirect(base_url("admin/products"));
	}

	public function borrar_producto($id)
	{
		$this->validate();
		$this->product->delete($id);
		redirect(base_url("admin/products"));
	}

	public function orders()
	{
		$this->validate();
		$data['result'] = $this->order->lists(0);
		$this->load->view('admin/layout/header', $data);
		$this->load->view('admin/layout/sidebar');
		$this->load->view('admin/orders');
		$this->load->view('admin/layout/footer');
	}

	public function pedido_detalles($orderid)
	{
		$this->validate();

        $data["pedido"] = $this->order->getbyid($orderid);
		$data["usuario"] = $this->order->getuserbyid($data["order"]->usuarioid);
        $data["pedido_detalle"] = $this->order->getorderdetails($orderid);

		$this->load->view('admin/layout/header', $data);
		$this->load->view('admin/layout/sidebar');
		$this->load->view('admin/orderdetail');
		$this->load->view('admin/layout/footer');
	}

	public function updatestatus($orderid, $odid)
	{
		$query = "UPDATE t_pedidos_detalles SET status = 'entregado' WHERE id = " . $odid;
		$this->db->query($query);
		redirect(base_url("admin/orderdetail/" . $orderid));
	}

	public function logout()
	{
		$this->cookie->clearCookie("usertype");
		$this->cookie->clearCookie("userid");

		redirect(base_url());
	}
}
