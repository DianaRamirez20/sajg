<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Investigaciones extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_investigacion' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nombre' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'descripción' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'año' => [
                'type'       => 'DATE',
            ],
            'id_tema' => [
                'type'       => 'INT',
            ],
            'archivo' => [
                'type'       => 'BLOB',
            ],
            'informe' => [
                'type'       => 'BLOB',
            ],
            'estatus' => [
                'type'       => 'CHAR',
            ],
            'fecha_modificacion' => [
                'type'       => 'DATETIME',
            ],
        ]);
        $this->forge->addKey('id_investigacion', true);
        $this->forge->addForeignKey('id_tema' , tema,'id_tema','CASCADE','CASCADE');
        $this->forge->createTable('investigaciones');
    }

    public function down()
    {
        $this->forge->dropTable('investigaciones');
    }
}
