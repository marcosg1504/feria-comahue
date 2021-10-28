<?php namespace App\Models;

use CodeIgniter\Model;

class producto_model extends Model {
    public function mostrarProductos() {
        $productos=$this->db->query('SELECT * FROM t_productos');
        return $productos->getResult();
    }

    public function insertar ($datos) {

        $nombres = $this->db->table('t_productos');
        $nombres->insert($datos);

        return $this->db->insertID();
    }

    public function obtener_nombre ($datos) {

        $nombres = $this->db->table('t_productos');
        $nombres->where($datos);

        return $nombres->get()->getResultArray();
    }

    public function actualizar ($datos,$id_producto) {

        $nombres = $this->db->table('t_productos');
        $nombres->set($datos);
        $nombres->where('id_producto',$id_producto);

        return $nombres->update();
    }

    public function eliminar ($datos) {
        $nombres = $this->db->table('t_productos');
        $nombres->where($datos);


        return $nombres->delete();

       
    }
}