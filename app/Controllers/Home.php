<?php

namespace App\Controllers;
use App\Models\Temas;
use App\Models\EncuestasCortas;
use App\Models\EncuestasLargas;
use App\Models\Slider;
use App\Models\Municipios;

class Home extends BaseController
{
    public function index()
    {
        $mensaje=session('mensaje');
        $encuestasR = new EncuestasCortas();
        $municipioR = new Municipios();
        $temasR = new Temas();
        $encuestasL = new EncuestasLargas();
        $sliderR = new Slider();
        $temas= $temasR->obtenerTemaActivoByDescripcion();
        $encuestas = $encuestasR->obtenerPregunta();
        $votos = $encuestasR->votosTotales();
        $slider = $sliderR->obtenerSliderActivo();
        $encuestasLargas = $encuestasL->getEncuestasL();
        $municipio = $municipioR->obtenerMunicipios();
        return view('index',['temas'=>$temas, 'encuestas'=>$encuestas,'municipio' =>$municipio, 'mensaje'=>$mensaje, 'votos'=>$votos, 'encuestasLargas'=>$encuestasLargas, 'slider'=> $slider  ]);
    }

    public function encuesta()
    {
        $respuesta1 = $this->request->getPost('respuesta1');
        $respuesta2 = $this->request->getPost('respuesta2');
        $respuesta3 = $this->request->getPost('respuesta3');
        $respuesta4 = $this->request->getPost('respuesta4');
        if($respuesta1!==null){
            $encuestasU = new EncuestasCortas();
            $encuestasA=$encuestasU->votos1($respuesta1);
            if($encuestasA==true){
            
                return redirect()->to(base_url('/index'))->with('mensaje', '1');
            }
        }elseif($respuesta2!==null){
            $encuestasU = new EncuestasCortas();
            $encuestasA=$encuestasU->votos2($respuesta2);
            if($encuestasA==true){
            
                return redirect()->to(base_url('/index'))->with('mensaje', '1');
            }

        }elseif($respuesta3!==null){
            $encuestasU = new EncuestasCortas();
            $encuestasA=$encuestasU->votos3($respuesta3);
            if($encuestasA==true){
            
                return redirect()->to(base_url('/index'))->with('mensaje', '1');
            }
        }elseif($respuesta4!==null){
            $encuestasU = new EncuestasCortas();
            $encuestasA=$encuestasU->votos4($respuesta4);
            if($encuestasA==true){
            
                return redirect()->to(base_url('/index'))->with('mensaje', '1');
            }
    }
}

}