<?php

namespace App\Controllers;
use App\Models\Investigadores;
use App\Models\Objetivos;
use App\Models\Comisiones;
class Red_Investigadores extends BaseController
{
    public function index()
    {
        $status='A';
        $investigadoresR = new Investigadores();
        $objetivosR = new Objetivos();
        $comisionesR = new Comisiones();
        $objetivos = $objetivosR->where('estatus', $status)->findAll();
        $comisiones = $comisionesR->where('estatus', $status)->findAll();
        $datos = $investigadoresR->where('estatus', $status)->findAll();
        return view('red_investigadores', ['datos' => $datos, 'objetivos'=>$objetivos, 'comisiones'=>$comisiones]);
    }
}