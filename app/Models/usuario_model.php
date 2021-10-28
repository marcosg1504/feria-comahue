<?php namespace App\Models;

use CodeIgniter\Model;

class usuario_model extends Model {
 

    public function obtener_usuario ($data) {

        $usuario = $this->db->table('t_usuarios');
        $usuario->where($data);

        return $usuario->get()->getResultArray();
    }

  
        // public function mostrarProductos() {
        //     $productos=$this->db->query('SELECT * FROM t_productos');
        //     return $productos->getResult();
        // }
    
        public function insertar ($datos) {

            $usuario = $this->db->table('t_usuarios');
            $usuario->insert($datos);
    
            return $this->db->insertID();
        }
    



}