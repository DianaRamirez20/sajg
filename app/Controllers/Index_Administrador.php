<?php

namespace App\Controllers;
use App\Models\Temas;
use App\Models\EncuestasCortas;
use App\Models\EncuestasLargas;
use App\Models\Slider;
use App\Models\Municipios;

class Index_Administrador extends BaseController
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
        return view('index-admin',['temas'=>$temas, 'encuestas'=>$encuestas,'municipio' =>$municipio, 'mensaje'=>$mensaje, 'votos'=>$votos, 'encuestasLargas'=>$encuestasLargas, 'slider'=> $slider  ]);
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

public function edit($id)
{
    $municipioE = new Municipios();
    $data = ["id_municipio" =>$id];
    $datos = $municipioE->obtenerMunicipio($data);
    $mensaje=session('mensaje');
    $municipio = $municipioE->asObject()->find($id);

    if($municipio == null){
        throw PageNotFoundException::forPageNotFound();
    }
    
    $validation = \Config\Services::validation();
    return view('municipio_edit', ['validation' => $validation, 'municipio' => $municipio, 'datos'=>$datos, 'mensaje'=> $mensaje]);
}

public function update($id){

    $pdf = $this->request->getPost('pdf');

    $datos= [
        "nombre" => $_POST['nombre'],
        "pdf" => $pdf
    ];

    $id = $_POST['id_municipio'];

    $municipioA = new Municipios();

    $res= $municipioA->updateMunicipio($id, $datos);

    $res=$this->_uploadDoc($id);
    

    if ($res==null) {
        return redirect()->to(base_url('/index-admin'))->with('mensaje', '4');
    }else{
        return redirect()->to(base_url('index_admin/edit'.$id))->with('mensaje', '2');
    }
}

private function _uploadDoc($id)
{
    if($imageFile = $this->request->getFile('pdf')){
        if($imageFile->isValid() && !$imageFile->hasMoved()){
            //validaciones 
            $validated = $this->validate([
                'pdf' => [
                    'uploaded[pdf]',
                    'ext_in[pdf,pdf]'
                ]
            ]);
            if($validated){
                $newName = $imageFile->getRandomName();
                $imageFile->move(ROOTPATH.'public/documentos_municipios/'.$id,$newName);

                $municipioA = new Municipios();

                $respuesta= $municipioA->updateMunicipio($id, [
                    'pdf' => $newName
                ]);
                return null;
            }else{
                return  $this->validator->getError('pdf');
            }
        }
    }

    
}


}