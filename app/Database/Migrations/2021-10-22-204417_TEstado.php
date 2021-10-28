<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TEstado extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_pedido'          => [
                'type'           => 'INT',

                'unsigned'       => true,
               
            ],

            'fecha'       => [
                'type'           => 'DATETIME',

                
            ],

            'descripcion'       => [
                'type'           => 'TEXT',

     
            ],

                     
        ]);
        $this->forge->addKey('id_pedido', true);
        $this->forge->addKey('fecha', true);
        $this->forge->addForeignKey('id_pedido', 't_pedidos', 'id_pedido');
      
        $this->forge->createTable('t_estados');
    }

    public function down()
    {
        $this->forge->dropTable('t_estados');
    }
}
