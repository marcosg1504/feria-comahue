<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TRol extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_rol'          => [
                'type'           => 'INT',

                'unsigned'       => true,
                'auto_increment' => true,
            ],


            'nombre'       => [
                'type'           => 'VARCHAR',
                'constraint' => 30,

              
            ],

                     
        ]);
        $this->forge->addKey('id_rol', true); 
     
        $this->forge->createTable('t_roles');
    }

    public function down()
    {
        $this->forge->dropTable('t_roles');
    }
}