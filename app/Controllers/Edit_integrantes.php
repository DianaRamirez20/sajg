<?php

namespace App\Controllers;
use App\Models\Investigadores;

class Edit_integrantes extends BaseController
{
    public function index()
    {
        $investigadoresR = new Investigadores();
        $mensaje=session('mensaje');
        $datos = $investigadoresR->readInv();

        $data = [
            "datos" => $datos,
            "mensaje" => $mensaje
        ];
        return view('edit_integrante', [ 'mensaje'=> $mensaje, 'datos'=>$datos]);
    }
}