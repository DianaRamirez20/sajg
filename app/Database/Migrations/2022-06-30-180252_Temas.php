<?php
namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Temas extends Migration
{
    public function up()
    {
    $this->forge->addField([
        'id_tema' => [
            'type'           => 'INT',
            'constraint'     => 5,
            'unsigned'       => true,
            'auto_increment' => true,
        ],
        'descripcion' => [
            'type'       => 'VARCHAR',
            'constraint' => '255',
        ],
        'imagen' => [
            'type'       => 'BLOB',
            'null' => true,
        ],
        'estatus' => [
            'type'       => 'CHAR',
        ],
        'fecha_modificacion datetime default current_timestamp'
    ]);
    $this->forge->addKey('id_tema', true);
    $this->forge->createTable('temas');
    }
    public function down()
    {
    $this->forge->dropTable('temas');
    }
}

