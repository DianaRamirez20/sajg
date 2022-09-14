<?php

namespace App\Controllers;
use App\Models\Temas;

class Tema_edit extends BaseController
{
    public function index()
    {
        $temasR = new Temas();
        $mensaje=session('mensaje');
        $datos = $temasR->readTema();

        $data = [
            "datos" => $datos,
            "mensaje" => $mensaje
        ];
        return view('temas_admin_edit', $data);
    }
}