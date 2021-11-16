<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TCategoria extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_categoria'          => [
                'type'           => 'INT',
                'unsigned'       => true,
                'auto_increment' => true,
            ],
           
            'nombre' => [
                'type' => 'TEXT',
             
            ],

         
           
        ]);
        $this->forge->addKey('id_categoria', true);
        $this->forge->createTable('t_categorias');
    }

    public function down()
    {
        $this->forge->dropTable('t_categorias');
    }
}
