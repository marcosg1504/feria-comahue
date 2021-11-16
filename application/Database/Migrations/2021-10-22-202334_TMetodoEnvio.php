<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TMetodoEnvio extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_metodo_envio'          => [
                'type'           => 'INT',
                'auto_increment' => true,
                'unsigned'       => true,
            ],
           
            'descripcion' => [
                'type' => 'TEXT',
     
              
            ],

         
           
        ]);
        $this->forge->addKey('id_metodo_envio', true);

        $this->forge->createTable('t_metodos_envios');
    }

    public function down()
    {
        $this->forge->dropTable('t_metodos_envios');
    }
}

