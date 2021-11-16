<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TProducto extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_producto'          => [
                'type'           => 'INT',

                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'id_categoria'       => [
                'type'           => 'INT',

                'unsigned'       => true,
            ],
            'nombre' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => true,
            ],

            'precio' => [
                'type' => 'DECIMAL',
                
                'null' => true,
            ],

            'descripcion' => [
                'type' => 'TEXT',
           
                'null' => true,
            ],
            'otros_detalles' => [
                'type' => 'TEXT',
                'null' => true,
            ],

            'url_imagen_1' => [
                'type' => 'TEXT',
 
            ],
            'url_imagen_2' => [
                'type' => 'TEXT',
    

            ],

            'url_imagen_3' => [
                'type' => 'TEXT',
       
            ],

            'stock' => [
                'type' => 'SMALLINT',
                'null' => true,
            ],

            'estado' => [
                'type' => 'TINYINT',
                'constraint' => 30,
            ],
            


        ]);
        $this->forge->addKey('id_producto', true);
        $this->forge->addForeignKey('id_categoria', 't_categorias', 'id_categoria');
        $this->forge->createTable('t_productos');
    }

    public function down()
    {
        $this->forge->dropTable('t_productos');
    }
}
