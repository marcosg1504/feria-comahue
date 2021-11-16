<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TEventoCalendario extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_evento_calendario'          => [
                'type'           => 'INT',

                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'id_usuario'       => [
                'type'           => 'INT',

                'unsigned'       => true,
            ],
            'nombre' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => true,
    
            ],

            'descripcion' => [
                'type' => 'TEXT',
                'constraint' => 50,
                'null' => true,
  
            ],

            'fecha' => [
                'type' => 'DATE',
        
                'null' => true,

            ],
            'hora_inicio' => [
                'type' => 'TIME',
                'null' => true,

            ],
            'hora_fin' => [
                'type' => 'TIME',
                'null' => true,
            
            ],

          
            'url_imagen_portada' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true,
            ],

        ]);
        $this->forge->addKey('id_evento_calendario', true);
        $this->forge->addForeignKey('id_usuario', 't_usuarios', 'id_usuario');
        $this->forge->createTable('t_eventos_calendarios');
    }

    public function down()
    {
        $this->forge->dropTable('t_eventos_calendarios');
    }
}
