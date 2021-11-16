<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TPedido extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_pedido'          => [
                'type'           => 'INT',

                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'id_usuario'       => [
                'type'           => 'INT',

                'unsigned'       => true,
            ],
            'fecha'       => [
                'type'           => 'DATETIME',

      
            ],

            'id_carrito'       => [
                'type'           => 'INT',

             
            ],

            'id_metodo_pago'       => [
                'type'           => 'INT',

                'unsigned'       => true,
            ],

            'id_metodo_envio'       => [
                'type'           => 'INT',

                'unsigned'       => true,
            ],


           
        ]);
        $this->forge->addKey('id_pedido', true);
        $this->forge->addForeignKey('id_usuario', 't_usuarios', 'id_usuario');
        $this->forge->addForeignKey('id_metodo_pago', 't_metodos_pagos', 'id_metodo_pago');
        $this->forge->addForeignKey('id_metodo_envio', 't_metodos_envios', 'id_metodo_envio');

        $this->forge->createTable('t_pedidos');
    }

    public function down()
    {
        $this->forge->dropTable('t_pedidos');
    }
}
