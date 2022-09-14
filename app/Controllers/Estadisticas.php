<?php

namespace App\Controllers;
use App\Models\Municipios;

class Estadisticas extends BaseController
{
    public function index($id)
    {
        $estadisticas = new Municipios();
        $data = ["id_municipio" =>$id];
        $datos = $estadisticas->obtenerEstadistica($data);
        $mensaje=session('mensaje');
        $estadistica = $estadisticas->asObject()->find($id);
        $mensaje=session('mensaje');
        $municipio = $estadisticas->obtenerMunicipios();
       
        return view('estadisticas', [ 'mensaje'=> $mensaje, 'estadistica'=>$estadistica, 'datos'=>$datos, 'municipio'=>$municipio]);
    }

}