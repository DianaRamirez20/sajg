<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Usuario extends Seeder
{
    public function run()
    {
        $nombre= "Diana";
        $apellidos="Ramírez Becerra";
        $correo = "diana@gmail.com";
        $telefono = 4777908451;
        $contrasena = "123";
        $usuario = "investigador";

        $data = [
            'nombre' => $nombre,
            'apellidos'    => $apellidos,
            'correo'    => $correo,
            'telefono'    => $telefono,
            'contrasena'    => $contrasena,
            'usuario'    => $usuario
        ];

        // Using Query Builder
        $this->db->table('users')->insert($data);
    }
}
