<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Categoria extends Seeder
{
        public function run()
        {
            $categoria1 ="ropa";
            $categoria2 ="artesanal";
            $categoria3 ="Piedras y Cristales";


           
                
                $data1 = [
                        'nombre' =>  $categoria1,
                       
                ];

                     
                $data2 = [
                    'nombre' =>  $categoria2,
                   
            ];

                 
            $data3 = [
                'nombre' =>  $categoria3,
               
        ];

                // Using Query Builder
                $this->db->table('t_categorias')->insert($data1);
                $this->db->table('t_categorias')->insert($data2);
                $this->db->table('t_categorias')->insert($data3);

                // Simple Queries (version vieja)
              //  $this->db->query("INSERT INTO users (username, email) VALUES(:username:, :email:)", $data);

        }
}