<?php

// namespace App\Database\Migrations;

// use CodeIgniter\Database\Migration;

// class TLocalidad extends Migration
// {
//     public function up()
//     {
//         $this->forge->addField([
//             'id_localidad'          => [
//                 'type'           => 'INT',

//                 'unsigned'       => true,
//                 'auto_increment' => true,
//             ],
//             'id_provincia'       => [
//                 'type'           => 'INT',

//                 'unsigned'       => true,
//             ],
//             'nombre' => [
//                 'type' => 'VARCHAR',
//                 'constraint' => 50,
//                 'null' => true,
//             ],

//             'codigo_postal' => [
//                 'type' => 'VARCHAR',
//                 'constraint' => 50,
//                 'null' => true,
//             ],

           
           
//         ]);
//         $this->forge->addKey('id_localidad', true);
//         $this->forge->addForeignKey('id_provincia', 't_provincias', 'id_provincia');
//         $this->forge->createTable('t_localidades');
//     }

//     public function down()
//     {
//         $this->forge->dropTable('t_localidades');
//     }
// }
