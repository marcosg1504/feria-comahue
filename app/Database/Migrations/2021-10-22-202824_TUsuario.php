<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TUsuario extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_usuario'          => [
                'type'           => 'INT',

                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'id_domicilio'       => [
                'type'           => 'INT',

                'unsigned'       => true,
            ],
            'nombre' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
    
            ],

            'apellido' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
  
            ],

            'correo' => [
                'type' => 'VARCHAR',
                'constraint' => 120,

            ],
            'contrasena' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'cuil' => [
                'type' => 'VARCHAR',
                'constraint' => 11,
                'null' => true,
            ],

            'celular' => [
                'type' => 'VARCHAR',
                'null' => true,
                'constraint' => 13,
            ],

            'nombre_emprendimiento' => [
                'type' => 'VARCHAR',
                'constraint' => 30,
                'null' => true,
            ],
            'descripcion_emprendimiento' => [
                'type' => 'TEXT',
                'null' => true,
            ],

            'url_imagen_portada' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true,
            ],
            'url_imagen_logo' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true,
            ],
            'estado' => [
                'type' => 'TINYINT',
                'constraint' => 1,

            ],

            'id_rol' => [
                'type'           => 'INT',

                'unsigned'       => true,

            ],

            //DOMICILIOOOOOOOOOOOO

            // 'id_domicilio'          => [
            //     'type'           => 'INT',

            //     'unsigned'       => true,
            //     'auto_increment' => true,
            // ],
            'localidad' => [
                'type' => 'VARCHAR',
                'constraint' => 70,
          
            ],

            'provincia' => [
                'type' => 'VARCHAR',
                'constraint' => 70,
          
            ],
            'calle' => [
                'type' => 'VARCHAR',
                'constraint' => 70,
          
            ],

            'numero' => [
                'type' => 'SMALLINT',
          
                'null' => true,
            ],

            'barrio' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => true,
            ],
            'piso' => [
                'type' => 'SMALLINT',
          
                'null' => true,
            ],
            'num_depto' => [
                'type' => 'VARCHAR',
                'constraint' => 10,
                'null' => true,
            ],

            'desc_adicional' => [
                'type' => 'TEXT',
                'null' => true,
            ],



        ]);
        $this->forge->addKey('id_usuario', true);
        //$this->forge->addForeignKey('id_domicilio', 't_domicilios', 'id_domicilio');
        $this->forge->addForeignKey('id_rol', 't_roles', 'id_rol');
        $this->forge->createTable('t_usuarios');
    }

    public function down()
    {
        $this->forge->dropTable('t_usuarios');
    }
}
