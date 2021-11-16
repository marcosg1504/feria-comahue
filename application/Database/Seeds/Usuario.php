<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Usuario extends Seeder
{
        public function run()
        {
            $nombre ="feriante"; 
            $domicilio ="1"; 
            $apellido="sad" ;
            $contrasena=password_hash("123", PASSWORD_DEFAULT);
            $cuil="3-dsa9752-5";
            $celular="122223456789";
            $nombre_emprendimiento="MUDRAS";
            $descripcion_emprendimiento="Artesanias";
            $url_imagen_portada="http";
            $url_imagen_logo="http";
            $estado="";
            $id_rol="2";
            $correo="";


            $calle ="collon cura";
            $numero="3020";
            $barrio="union ";
            $piso="1";
            $num_depto="";
            $desc_adicional="a la vuelta";
            $provincia="neuquen";
            $localidad="confluencia";

                
                $data = [
                        'nombre' => $nombre,
                        'id_domicilio' => $domicilio,
                        'apellido' => $apellido,
                        'contrasena' => $contrasena,
                        'cuil' => $cuil,
                        'celular' => $celular,
                        'nombre_emprendimiento' => $nombre_emprendimiento,
                        'descripcion_emprendimiento' => $descripcion_emprendimiento,
                        'url_imagen_portada' => $url_imagen_portada,
                        'url_imagen_logo' => $url_imagen_logo,
                        'estado' => $estado,
                        'id_rol' => $id_rol,

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
                $this->db->table('t_usuarios')->insert($data);

                // Simple Queries (version vieja)
              //  $this->db->query("INSERT INTO users (username, email) VALUES(:username:, :email:)", $data);

        }
}