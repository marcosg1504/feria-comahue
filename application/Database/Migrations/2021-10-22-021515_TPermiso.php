<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TPermiso extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_permiso'          => [
                'type'           => 'INT',
                'unsigned'       => true,
                'auto_increment' => true,

            ],


            'descripcion'       => [
                'type'           => 'TEXT',
       
            ],

                     
        ]);

        $this->forge->addKey('id_permiso', true);     
        $this->forge->createTable('t_permisos');
    }

    public function down()
    {
        $this->forge->dropTable('t_permisos');
    }
}