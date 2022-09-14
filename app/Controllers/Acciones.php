<?php

namespace App\Controllers;
use App\Models\Municipios;
use App\Models\Propuesta;

class Acciones extends BaseController
{
    public function index()
    {
        $municipiosR = new Municipios();
        $municipios = $municipiosR->obtenerMunicipios();
        $mensaje=session('mensaje');
        return view('propuesta_accion', [ 'mensaje'=> $mensaje, 'municipios' => $municipios]);
    }

    public function create(){

        $propuestaN = new Propuesta();

        
        $nombre = $this->request->getPost('nombre');
        $sexo = $this->request->getPost('sexo');
        $edad = $this->request->getPost('edad');
        $actividad = $this->request->getPost('actividad');
        $correo = $this->request->getPost('correo');
        $municipio = $this->request->getPost('municipio');
        $zona = $this->request->getPost('zona');
        $detalle = $this->request->getPost('detalle');
        $justificacion = $this->request->getPost('justificacion');
        
         $id = $propuestaN->insert(
            [
            'nombreC' => $nombre,
            'sexo' => $sexo,
            'edad' => $edad,
            'actividad' => $actividad,
            'correo' => $correo,
            'id_municipio' => $municipio,
            'zona' => $zona,
            'detalle' => $detalle,
            'justifacion' => $justificacion
            ]
        );

     return redirect()->to(base_url('/accion'))->with('mensaje', '1');
    }

         
}