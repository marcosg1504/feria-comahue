<?php
class ProductModel extends CI_Model{
    
    public function __constuct()
    {
        parent::__construct();   
        $this->load->database();     
    }

    public function lists()
    {
        $this->db->order_by("nombre", "ASC");
        $result = $this->db->get('t_productos');
        return $result->result();
    }

	public function lists_filter()
    {
        $this->db->order_by("nombre", "ASC");
	
        $result = $this->db->get('t_productos');

        return $result->result();
    }

    public function save()
    {
        $id = $this->input->post("id");
        $field=array(
            "nombre"=>$this->input->post("nombre"),
			"usuarioid"=>$this->input->post("usuarioid"),
            "mayor_precio"=>$this->input->post("mayor_precio"),
            "precio"=>$this->input->post("precio"),
            "descripcion"=>$this->input->post("descripcion"),
            "categoria"=>$this->input->post("categoria"),
            "estado"=>"activo",
        );
        if($id == 0){
            $this->db->insert("t_productos", $field);
            $id = $this->db->insert_id();
        }
        else{
            $this->db->where("id", $id);
            $this->db->update("t_productos", $field);
        }

        if(isset($_FILES["nombre_imagen"]) && is_uploaded_file($_FILES["nombre_imagen"]["tmp_name"]))
        {
            $target_dir = "././productpics/" . $id . ".png";
            move_uploaded_file($_FILES["nombre_imagen"]["tmp_name"], $target_dir);
            $imagenombre = $id . ".png";
            $field=array(
                "nombre_imagen"=>$imagenombre,
            );
            $this->db->where("id", $id);
            $this->db->update("t_productos", $field);
        }
    }

    public function getbyid($id)
    {
        $this->db->where("id", $id);
        $result = $this->db->get("t_productos");
        if($result->num_rows() == 0)
            return false;
        else
            return $result->row();
    }

    public function delete($id)
    {
        $this->db->where("id", $id);
        $this->db->delete("t_productos");
    }
}
