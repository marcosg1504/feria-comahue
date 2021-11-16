<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TRolPermiso extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_permiso'          => [
                'type'           => 'INT',

                'unsigned'       => true,
               
            ],


            'id_rol'       => [
                'type'           => 'INT',

                'unsigned'       => true,
            ],

                     
        ]);
        $this->forge->addKey('id_permiso', true);
        $this->forge->addKey('id_rol', true);
           $this->forge->addForeignKey('id_permiso', 't_permisos', 'id_permiso');
           $this->forge->addForeignKey('id_rol', 't_roles', 'id_rol');

     
        $this->forge->createTable('t_roles_permisos');
    }

    public function down()
    {
        $this->forge->dropTable('t_roles_permisos');
    }
}