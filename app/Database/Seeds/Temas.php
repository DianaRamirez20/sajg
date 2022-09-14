<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Temas extends Seeder
{
    public function run()
    {
        $descripcion= "Tema de Salud";
        $estatus="A";

        $data = [
            'descripcion' => $descripcion,
            'estatus'    => $estatus
        ];

        // Using Query Builder
        $this->db->table('temas')->insert($data);
    }
}
