<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TUsuarioRol extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_usuario'          => [
                'type'           => 'INT',

                'unsigned'       => true,
               
            ],


            'id_rol'          => [
                'type'           => 'INT',

                'unsigned'       => true,
               
            ],

                     
        ]);
        $this->forge->addKey('id_usuario', true);
        $this->forge->addKey('id_rol', true);
        $this->forge->addForeignKey('id_usuario', 't_usuarios', 'id_usuario');
        $this->forge->addForeignKey('id_rol', 't_roles', 'id_rol');

     
        $this->forge->createTable('t_usuarios_roles');
    }

    public function down()
    {
        $this->forge->dropTable('t_usuarios_roles');
    }
}