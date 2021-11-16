<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	
	public function __construct()
    {
        parent::__construct();
        $this->load->helper("cookie");
		$this->load->model("CookieModel", "cookie");
		$this->load->model("ProductModel", "product");
    }

	public function index()
	{
        $this->load->view("layout/header");
        $this->load->view("login");
		$this->load->view("layout/footer");
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
            $this->cookie->setCookie("userid", $row->id);
            $this->cookie->setCookie("usertype", "user");
            $from = $this->input->post("from");
            if($from == "checkout")
            {
                redirect(base_url("checkout"));
            }
            else{
                redirect(base_url("user"));
            }
        }
    }

    public function registro()
    {
        $nombre = $this->input->post("nombre");
        $telefono = $this->input->post("telefono");
        $correo = $this->input->post("correo");
        $contrasena = $this->input->post("contrasena");
		
        $this->db->where("correo", $correo);
        $result = $this->db->get("t_usuarios");
        if($result->num_rows() > 0){
            redirect(base_url("login?status=exist"));
        }

        $field=array(
            "nombre"=>$nombre,
            "telefono"=>$telefono,
            "correo"=>$correo,
            "contrasena"=>$contrasena,
			"id_rol"=>"3",
        );
        $this->db->insert("t_usuarios", $field);
        $id = $this->db->insert_id();
        $_COOKIE["userid"] = $id;
        $_COOKIE["usertype"] = "user";
        $from = $this->input->post("from");
        if($from == "checkout")
        {
            redirect(base_url("checkout"));
        }
        else{
            redirect(base_url("user"));
        }
    }

	public function registro_feriante()
    {
        $nombre = $this->input->post("nombre");
        $telefono = $this->input->post("telefono");
        $correo = $this->input->post("correo");
        $contrasena = $this->input->post("contrasena");
        $this->db->where("correo", $correo);
        $result = $this->db->get("t_usuarios");
        if($result->num_rows() > 0){
            redirect(base_url("login?status=exist"));
        }

        $field=array(
            "nombre"=>$nombre,
            "telefono"=>$telefono,
            "correo"=>$correo,
            "contrasena"=>$contrasena,
			"id_rol"=>"2",
        );
        $this->db->insert("t_usuarios", $field);
        $id = $this->db->insert_id();
        $_COOKIE["userid"] = $id;
        $_COOKIE["usertype"] = "admin";
        $from = $this->input->post("from");
        if($from == "checkout")
        {
            redirect(base_url("checkout"));
        }
        else{
            redirect(base_url("user"));
        }
    }
}
