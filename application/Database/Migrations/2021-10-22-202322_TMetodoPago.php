<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TMetodoPago extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_metodo_pago'          => [
                'type'           => 'INT',
                'auto_increment' => true,
                'unsigned'       => true,
            ],
           
            'descripcion' => [
                'type' => 'TEXT',     
        
            ],

         
           
        ]);
        $this->forge->addKey('id_metodo_pago', true);

        $this->forge->createTable('t_metodos_pagos');
    }

    public function down()
    {
        $this->forge->dropTable('t_metodos_pagos');
    }
}

