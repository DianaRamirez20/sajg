<?php

namespace App\Controllers;
use App\Models\Investigaciones;
use App\Models\Temas;

class Centro_documental_admin_edit extends BaseController
{
    public function index()
    {
        $status ='A';
        $investigacionR = new Investigaciones();
        $mensaje=session('mensaje');
        $datos = $investigacionR->obtenerTemaActivo();

        $data = [
            "datos" => $datos,
            "mensaje" => $mensaje,
        ];
        return view('centro_documental_admin_edit', ['mensaje'=> $mensaje, 'datos'=> $datos]);
    }
}