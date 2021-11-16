<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class domicilio extends Seeder
{
        public function run()
        {
            $calle ="villaguy";
            $numero="3012";
            $barrio="union de mayoo";
            $piso="1";
            $num_depto="";
            $desc_adicional="a la vuelta";
            $provincia="neuquen";
            $localidad="confluencia";
            

           
                
                $data = [
                        'calle' =>  $calle,
                        'numero' =>  $numero,
                        'barrio' =>  $barrio,
                        'piso' =>  $piso,
                        'num_depto' =>  $num_depto,
                        'desc_adicional' =>  $desc_adicional,
                        'provincia' =>  $provincia,
                        'localidad' =>  $localidad,
                       
                ];

                // Using Query Builder
                $this->db->table('t_domicilios')->insert($data);

                // Simple Queries (version vieja)
              //  $this->db->query("INSERT INTO users (username, email) VALUES(:username:, :email:)", $data);

        }
}