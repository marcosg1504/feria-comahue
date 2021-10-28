<?php
class OrderModel extends CI_Model{
    
    public function __constuct()
    {
        parent::__construct();   
        $this->load->database();     
		$this->load->model("CookieModel", "cookie");
    }

    public function lists($customerid)
    {
        $query = "SELECT O.*, U.nombre, U.correo, U.telefono FROM t_usuarios AS U, t_pedidos AS O ";
        $query .= "WHERE U.id = O.usuarioid AND O.estado_pago = 'pagado' ";
        if($customerid != 0)
            $query .= "AND O.usuarioid = " . $customerid . " ";
        $query .= "ORDER BY O.id DESC";
        $result = $this->db->query($query);
        return $result->result();
    }

    public function getbydynamiclink($dynamiclink)
    {
        $this->db->where("link_dinamico", $dynamiclink);
        $result = $this->db->get("t_pedidos");
        if($result->num_rows() == 0)
            return false;
        else
            return $result->row();
    }

    public function getbyid($id)
    {
        $this->db->where("id", $id);
        $result = $this->db->get("t_pedidos");
        if($result->num_rows() == 0)
            return false;
        else
            return $result->row();
    }

    public function getaddressbyid($id)
    {
        $this->db->where("id", $id);
        $result = $this->db->get("t_direcciones");
        if($result->num_rows() == 0)
            return false;
        else
            return $result->row();
    }

    public function getuserbyid($id)
    {
        $this->db->where("id", $id);
        $result = $this->db->get("t_usuarios");
        if($result->num_rows() == 0)
            return false;
        else
            return $result->row();
    }

    public function gett_pedidos_detalles($orderid)
    {
        $query = "SELECT OD.*, P.nombre FROM t_pedidos_detalles AS OD, t_productos AS P ";
        $query .= "WHERE P.id = OD.productoid AND OD.pedidoid = " . $orderid;
        $result = $this->db->query($query);
        return $result->result();
    }

    public function save()
    {
        $usuarioid = $this->cookie->getCookie("userid");
        $field=array(
            "usuarioid" => $usuarioid,
            "direccion" => $this->input->post("direccion"),
            "provincia" => $this->input->post("provincia"),
            "pais" => $this->input->post("pais"),
            "codigo_postal" => $this->input->post("codigo_postal"),
        );
        $this->db->insert("t_direcciones", $field);
        $direccionid = $this->db->insert_id();

        $link_dinamico = rand(10000000, 99999999999);
        $link_exito = rand(10000000, 99999999999);

        $now = date("Y-m-d H:i:s");
        $field=array(
            "usuarioid" => $usuarioid,
            "direccionid" => $direccionid,
            "fecha_pedido" => $now,
            "total" => $this->input->post("importe_factura"),
            "estado_pedido"=>"nuevo",
            "estado_pago"=>"pendiente",
            "link_dinamico" => $link_dinamico,
            "link_exito" => $link_exito,
        );
        $this->db->insert("t_pedidos", $field);
        $pedidoid = $this->db->insert_id();

        $count = $this->input->post("count");
        for($i = 1; $i <= $count; $i++)
        {
            $field=array(
                "pedidoid"=>$pedidoid,
                "productoid"=>$this->input->post("productoid" . $i),
                "precio"=>$this->input->post("precio" . $i),
                "cantidad"=>$this->input->post("cantidad" . $i),
                "subtotal"=>$this->input->post("total" . $i),
                "estado"=>"nuevo",
            );
            $this->db->insert("t_pedidos_detalles", $field);
        }
        return $link_dinamico;
    }
}
