<?php

namespace App\Controllers;
use App\Models\Municipios;

class Estadisticas_indicadores extends BaseController
{
    public function index()
    {
        $estadisticas = new Municipios();
        $municipio = $estadisticas->obtenerMunicipios();
        
       
        return view('estadisticas_indicadores', ['municipio'=>$municipio]);
    }

}