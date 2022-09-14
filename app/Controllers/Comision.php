<?php

namespace App\Controllers;
use App\Models\Comisiones;

class Comision extends BaseController
{
    public function index()
    {
        $comisionesR = new Comisiones();
        $mensaje=session('mensaje');
        $datos = $comisionesR->readCom();

        $data = [
            "datos" => $datos,
            "mensaje" => $mensaje
        ];
        return view('edit_comision', [ 'mensaje'=> $mensaje, 'datos'=>$datos]);
    }
}