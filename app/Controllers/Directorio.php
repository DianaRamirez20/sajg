<?php

namespace App\Controllers;
use App\Models\Directorios;

class Directorio extends BaseController
{
    public function index()
    {
        $directorioR = new Directorios();
        $mensaje=session('mensaje');
        $datos = $directorioR->readDirectorio();
        return view('directorios', [ 'mensaje'=> $mensaje, 'datos'=>$datos]);
    }
}