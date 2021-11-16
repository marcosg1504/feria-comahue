<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Producto extends Seeder
{
        public function run()
        {
                
                $data = [
                        'id_categoria' => '2',
                        'nombre'    => 'Piedra AASD',
                        'descripcion'    => 'Piedra',
                        'otros_detalles'    => 'negra',
                        'precio' => '500',
                        'url_imagen_1'    => '1',
                        'url_imagen_2'    => '1',
                        'url_imagen_3'    => '1',
                        'stock'    => '5',
                        'estado'    => '1',

                ];

                // Using Query Builder
                $this->db->table('t_productos')->insert($data);

                // Simple Queries (version vieja)
              //  $this->db->query("INSERT INTO users (username, email) VALUES(:username:, :email:)", $data);

        }
}

