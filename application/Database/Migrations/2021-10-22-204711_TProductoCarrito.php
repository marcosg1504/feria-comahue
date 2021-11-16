<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TProductoCarrito extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_producto'          => [
                'type'           => 'INT',

                'unsigned'       => true,
       
            ],
           
            'id_carrito' => [
                'type'           => 'INT',

                'unsigned'       => true,
            ],

            'cantidad' => [
                'type' => 'SMALLINT',
     
                'null' => true,
            ],

           
        ]);
        $this->forge->addKey('id_producto', true);
        $this->forge->addKey('id_carrito', true);
        $this->forge->addForeignKey('id_producto', 't_productos', 'id_producto');
        $this->forge->addForeignKey('id_carrito', 't_carritos', 'id_carrito');

        $this->forge->createTable('t_productos_carritos');
    }

    public function down()
    {
        $this->forge->dropTable('t_productos_carritos');
    }
}