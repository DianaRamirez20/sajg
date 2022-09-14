<?php

namespace App\Controllers;
use App\Models\EncuestasCortas;
use App\Models\EncuestasLargas;
use App\Models\Pregunta;


class EncuestasAdmin extends BaseController
{
    public function index()
    {
        
        $encuestasLR = new EncuestasLargas();
        $preguntaR = new Pregunta();
        $encuestasR = new EncuestasCortas();
        $encuestas = $encuestasR->obtenerTodasPregunta();
        $pregunta = $preguntaR->obtenerPreguntaActiva();
        $preguntas = $preguntaR->obtenerTodasPreguntas();
       
        $encuestasL = $encuestasLR->getEncuestasL();
        $mensaje=session('mensaje');
        return view('encuestas', [ 'mensaje'=> $mensaje, 'encuestas'=>$encuestas, 'pregunta'=>$pregunta,'preguntas'=>$preguntas, 'encuestasL'=>$encuestasL]);
    }

    public function edit($id)
    {
        $encuestasE = new EncuestasCortas();
        $preguntaR = new Pregunta();
        $data = ["id_encuestasC" =>$id];
        $datos = $encuestasE->obtenerEncuesta($data);
        $preguntas = $preguntaR->obtenerPreguntaActiva();
        $mensaje=session('mensaje');
        $data = [
            "datos" => $datos,
        ];
        $encuesta = $encuestasE->asObject()->find($id);

        if($encuesta == null){
            throw PageNotFoundException::forPageNotFound();
        }
        
        $validation = \Config\Services::validation();
        return view('edit_encuesta', ['validation' => $validation, 'encuesta' => $encuesta, 'datos'=>$datos, 'mensaje'=> $mensaje,'preguntas'=>$preguntas]);
    }

    public function update($id){

        $respuesta1 = $this->request->getPost('respuesta1');
        $respuesta2 = $this->request->getPost('respuesta2');
        $respuesta3 = $this->request->getPost('respuesta3');
        $respuesta4 = $this->request->getPost('respuesta4');
        $id_pregunta = $this->request->getPost('id_pregunta');
        $estatus= $this->request->getPost('estatus');
        $fecha_inicio= $this->request->getPost('fecha_inicio');
        $fecha_fin= $this->request->getPost('fecha_fin');

        $datos= [
            "respuesta1" => $respuesta1,
            "respuesta2" => $respuesta2,
            "respuesta3" => $respuesta3,
            "respuesta4" => $respuesta4,
            "estatus" => $estatus,
            "fecha_inicio" => $fecha_inicio,
            "fecha_fin" => $fecha_fin
        ];

        $id = $_POST['id_encuestasC'];

        $encuestasA = new EncuestasCortas();

        $respuesta= $encuestasA->updateEncuesta($id, $datos);
        
        return redirect()->to(base_url('/encuesta'))->with('mensaje', '1');
    }

    public function delete($id){
    
        // $id = $_POST['id_tema'];
        $encuestasD = new EncuestasCortas();
        $encuestasD->asObject()->find($id);

        if($encuestasD==null){
            throw PageNotFoundException::forPageNotFound();
        }
        $encuestasD->delete($id);

        return redirect()->to(base_url('/encuesta'))->with('mensaje', '4');
}

public function create(){

    $encuestasN = new EncuestasCortas();

    
    $respuesta1 = $this->request->getPost('respuesta1');
    $respuesta2 = $this->request->getPost('respuesta2');
    $respuesta3 = $this->request->getPost('respuesta3');
    $respuesta4 = $this->request->getPost('respuesta4');
    $id_pregunta = $this->request->getPost('id_pregunta');
    $estatus= $this->request->getPost('estatus');
    $fecha_inicio= $this->request->getPost('fecha_inicio');
    $fecha_fin= $this->request->getPost('fecha_fin');
    

    if($this->validate('encuesta')){
        $id = $encuestasN->insert(
            [
                "id_pregunta"=> $id_pregunta,
            "respuesta1" => $respuesta1,
            "respuesta2" => $respuesta2,
            "respuesta3" => $respuesta3,
            "respuesta4" => $respuesta4,
            "estatus" => $estatus,
            "fecha_inicio" => $fecha_inicio,
            "fecha_fin" => $fecha_fin
            ]
        );
       
        return redirect()->to(base_url('/encuesta'))->with('mensaje', '2');
           
    }
    return redirect()->to(base_url('/encuesta'))->with('mensaje', '3');

}

public function createP(){

    $preguntaN = new Pregunta();

    
    $pregunta = $this->request->getPost('pregunta');
    $estatus= $this->request->getPost('estatusP');
    

    if($this->validate('pregunta')){
        $id = $preguntaN->insert(
            [
            "pregunta" => $pregunta,
            "estatusP" => $estatus
            ]
        );
       
        return redirect()->to(base_url('/encuesta'))->with('mensaje', '6');
           
    }
    return redirect()->to(base_url('/encuesta'))->with('mensaje', '7');

}
public function editP($id)
{
    $preguntaE = new Pregunta();
    $data = ["id_pregunta" =>$id];
    $datos = $preguntaE->obtenerPreguntaSeleccionada($data);
    $mensaje=session('mensaje');
    $pregunta = $preguntaE->asObject()->find($id);

    if($pregunta == null){
        throw PageNotFoundException::forPageNotFound();
    }
    
    $validation = \Config\Services::validation();
    return view('edit_pregunta', ['validation' => $validation, 'pregunta' => $pregunta, 'datos'=>$datos, 'mensaje'=> $mensaje]);
}

public function updateP($id){

    $pregunta = $this->request->getPost('pregunta');
    $estatus= $this->request->getPost('estatus');

    $datos= [
        "pregunta" => $pregunta,
        "estatusP" => $estatus
    ];

    $id = $_POST['id_pregunta'];

    $preguntaA = new Pregunta();

    $respuesta= $preguntaA->updatePregunta($id, $datos);
    
    return redirect()->to(base_url('/encuesta'))->with('mensaje', '5');
}


public function deleteP($id){
    
    // $id = $_POST['id_tema'];
    $preguntaD = new Pregunta();
    $preguntaD->asObject()->find($id);

    if($preguntaD==null){
        throw PageNotFoundException::forPageNotFound();
    }
    $preguntaD->delete($id);

    return redirect()->to(base_url('/encuesta'))->with('mensaje', '8');
}


public function createL(){

    $encuestasN = new EncuestasLargas();

    
    $descripcionL = $this->request->getPost('descripcionL');
    // $enlace= $this->request->getPost('enlace');
    $fecha_inicioL= $this->request->getPost('fecha_inicioL');
    $fecha_finL= $this->request->getPost('fecha_finL');
    $estatusL= $this->request->getPost('estatusL');
    

    if($this->validate('encuestaLarga')){
        $id = $encuestasN->insert(
            [
            "descripcion" => $descripcionL,
            "enlace" =>  $_POST['enlace'],
            "fecha_inicio" => $fecha_inicioL,
            "fecha_fin" => $fecha_finL,
            "estatus" => $estatusL,
            ]
        );
       
        return redirect()->to(base_url('/encuesta'))->with('mensaje', '10');
           
    }
    return redirect()->to(base_url('/encuesta'))->with('mensaje', '11');

}


public function deleteL($id){
    
    // $id = $_POST['id_tema'];
    $encuestaLD = new EncuestasLargas();
    $encuestaLD->asObject()->find($id);

    if($encuestaLD==null){
        throw PageNotFoundException::forPageNotFound();
    }
    $encuestaLD->delete($id);

    return redirect()->to(base_url('/encuesta'))->with('mensaje', '12');
}

public function editL($id)
{
    $encuestaLE = new EncuestasLargas();
    $data = ["id_encuestasL" =>$id];
    $datos = $encuestaLE->obtenerEncuestaL($data);
    $mensaje=session('mensaje');
    $encuesta = $encuestaLE->asObject()->find($id);

    if($encuesta == null){
        throw PageNotFoundException::forPageNotFound();
    }
    
    $validation = \Config\Services::validation();
    return view('edit_encuestaL', ['validation' => $validation, 'encuesta' => $encuesta, 'datos'=>$datos, 'mensaje'=> $mensaje]);
}


public function updateL($id){

    $descripcion = $this->request->getPost('descripcion');
    $enlace= $this->request->getPost('enlace');
    $fecha_inicio= $this->request->getPost('fecha_inicio');
    $fecha_fin= $this->request->getPost('fecha_fin');
    $estatus= $this->request->getPost('estatus');

    $datos= [
        "descripcion" => $descripcion,
        "enlace" => $enlace,
        "fecha_inicio" => $fecha_inicio,
        "fecha_fin" => $fecha_fin,
        "estatus" => $estatus
    ];

    $id = $_POST['id_encuestasL'];

    $encuestasA = new EncuestasLargas();

    $respuesta= $encuestasA->updateEncuestasLargas($id, $datos);
    
    return redirect()->to(base_url('/encuesta'))->with('mensaje', '9');
}

}