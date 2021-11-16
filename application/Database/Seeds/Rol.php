<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class rol extends Seeder
{
        public function run()
        {
            $rol1 ="encargado";
            $rol2 ="feriante";
            $rol3 ="cliente";


           
                
                $data1 = [
                        'nombre' =>  $rol1,
                       
                ];

                     
                $data2 = [
                    'nombre' =>  $rol2,
                   
            ];

                 
            $data3 = [
                'nombre' =>  $rol3,
               
        ];

                // Using Query Builder
                $this->db->table('t_roles')->insert($data1);
                $this->db->table('t_roles')->insert($data2);
                $this->db->table('t_roles')->insert($data3);

                // Simple Queries (version vieja)
              //  $this->db->query("INSERT INTO users (username, email) VALUES(:username:, :email:)", $data);

        }
}