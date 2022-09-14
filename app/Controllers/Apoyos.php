<?php

namespace App\Controllers;
use App\Models\Temas;  
use App\Models\Dependencia;
use App\Models\Tipo_Apoyo;
use App\Models\Derecho_Social;
use App\Models\Apoyo;

class Apoyos extends BaseController
{
    public function index()
    {

        $temasR = new Temas();
        $dependenciaR = new Dependencia();
        $derechoR = new Derecho_Social();
        $tipoR = new Tipo_Apoyo();
        $apoyo = new Apoyo();
        $datosT = $temasR->obtenerTemaActivoByDescripcion();
        $datosD = $dependenciaR->obtenerDependencia();
        $datosDS = $derechoR->obtenerDerecho();
        $datosTS = $tipoR->obtenerApoyo();
        $todosApoyoS = $apoyo->obtenerApoyos();
        $mensaje=session('mensaje');
        return view('apoyos_servicios', [ 'mensaje'=> $mensaje, 'datosT' => $datosT, 'datosD' => $datosD, 'datosDS' => $datosDS, 'datosTS' => $datosTS, 'todosApoyoS'=>$todosApoyoS]);
    }

    public function Buscar(){

        $temasR = new Temas();
        $dependenciaR = new Dependencia();
        $derechoR = new Derecho_Social();
        $tipoR = new Tipo_Apoyo();
        $mensaje=session('mensaje');
        $derecho = $this->request->getPost('derecho');
        $tema = $this->request->getPost('tema');
        $dependencia = $this->request->getPost('dependencia');
        $apoyo = $this->request->getPost('apoyo');
        $año = $this->request->getPost('año');
        $apoyoB = new Apoyo();
        $buscarTema = $apoyoB->ByTema($tema);
        $buscarDerecho = $apoyoB->ByDerecho($derecho);
        $buscarDependencia = $apoyoB->ByDependencia($dependencia);
        $buscarApoyo = $apoyoB->ByApoyo($apoyo);
        $buscaraño = $apoyoB->ByAño($año);
        $datosT = $temasR->obtenerTemaActivoByDescripcion();
        $datosD = $dependenciaR->obtenerDependencia();
        $datosDS = $derechoR->obtenerDerecho();
        $datosTS = $tipoR->obtenerApoyo();


        if($derecho ==!null){ 
            if($buscarDerecho ==!null){
                return view('apoyos_derecho', ['buscarDerecho' => $buscarDerecho, 'datosT' => $datosT, 'datosD' => $datosD, 'datosDS' => $datosDS, 'datosTS' => $datosTS]);
            }
            return redirect()->to(base_url('apoyos_servicios'))->with('mensaje', '1');
            
        }else if($tema ==!null){
            if($buscarTema ==!null){
                return view('apoyos_tema', ['buscarTema' => $buscarTema, 'datosT' => $datosT,'datosD' => $datosD, 'datosDS' => $datosDS, 'datosTS' => $datosTS]);
            }
            return redirect()->to(base_url('apoyos_servicios'))->with('mensaje', '3');
           
        }else if($dependencia ==!null){
            if($buscarDependencia ==!null){
                return view('apoyos_dependencia', ['buscarDependencia' => $buscarDependencia, 'datosT' => $datosT, 'datosD' => $datosD, 'datosDS' => $datosDS, 'datosTS' => $datosTS]);
            }
            return redirect()->to(base_url('apoyos_servicios'))->with('mensaje', '2');
           
        }else if($apoyo ==!null){
            if($buscarApoyo ==!null){
                return view('apoyos_tipo_apoyo', ['buscarApoyo' => $buscarApoyo, 'datosT' => $datosT, 'datosD' => $datosD, 'datosDS' => $datosDS, 'datosTS' => $datosTS]);
            }
            return redirect()->to(base_url('apoyos_servicios'))->with('mensaje', '4');
           
        }else if($año ==!null){
            if($buscaraño ==!null){
                return view('apoyos_año', ['buscaraño' => $buscaraño, 'datosT' => $datosT, 'datosD' => $datosD, 'datosDS' => $datosDS, 'datosTS' => $datosTS]);
            }
            return redirect()->to(base_url('apoyos_servicios'))->with('mensaje', '6');
           
        }
        return redirect()->to(base_url('apoyos_servicios'))->with('mensaje', '5');
            
       
    }
         
}