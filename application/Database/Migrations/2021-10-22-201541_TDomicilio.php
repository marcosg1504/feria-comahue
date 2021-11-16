<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TDomicilio extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_domicilio'          => [
                'type'           => 'INT',

                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'id_localidad'       => [
                'type'           => 'INT',

                'unsigned'       => true,
            ],
            'calle' => [
                'type' => 'VARCHAR',
                'constraint' => 70,
          
            ],

            'numero' => [
                'type' => 'SMALLINT',
          
                'null' => true,
            ],

            'barrio' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => true,
            ],
            'piso' => [
                'type' => 'SMALLINT',
          
                'null' => true,
            ],
            'num_depto' => [
                'type' => 'VARCHAR',
                'constraint' => 10,
                'null' => true,
            ],

            'desc_adicional' => [
                'type' => 'TEXT',
                'null' => true,
            ],

           
        ]);
        $this->forge->addKey('id_domicilio', true);
        $this->forge->addForeignKey('id_localidad', 't_localidades', 'id_localidad');
        $this->forge->createTable('t_domicilios');
    }

    public function down()
    {
        $this->forge->dropTable('t_domicilios');
    }
}
