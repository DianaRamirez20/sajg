<?php

namespace App\Controllers;
use App\Models\Usuarios;
use App\Models\Slider;

class Administrador extends BaseController
{
    public function index()
    {
        $sliderR = new Slider();
        $usuarioR = new Usuarios();

        $datos = $usuarioR->readUsers();
        $mensaje = session('mensaje');
        $slider = $sliderR->obtenerSlider();

        $data = [
            "slider"=>$slider,
            "datos" => $datos,
            "mensaje" => $mensaje
        ];
        
        return view('administrador', $data);
    }

    public function insertUser(){

        return view('crear_cuenta');
    }

   

    public function actualizar(){
        $datos= [
            "nombre" => $_POST['nombre'],
            "apellidos" => $_POST['apellidos'],
            "correo" => $_POST['correo'],
            "telefono" => $_POST['telefono'],
            "usuario" => $_POST['usuario'],
            "contrasena" => $_POST['contrasena'],
            "estatus" => $_POST['estatus']
        ];

        $id = $_POST['id_user'];

        $usuarioA = new Usuarios();

        $respuesta= $usuarioA->updateUser($datos, $id);

        if($respuesta >0){
         return redirect()->to(base_url('/administrador'))->with('mensaje','2');
        }else{
         return redirect()->to(base_url('/administrador'))->with('mensaje','3');
        }
    }

    public function create(){

        $sliderN = new Slider();
    
        
        $descripcion = $this->request->getPost('descripcionS');
        $estatus = $this->request->getPost('estatusS');
        
    
        if($this->validate('slider')){
            $id = $sliderN->insert(
                [
                "descripcion" => $descripcion,
                "estatus" => $estatus
                ]
            );
           
            return redirect()->to(base_url('/administrador'))->with('mensaje', '5');
               
        }
        return redirect()->to(base_url('/administrador'))->with('mensaje', '6');
    
    }

    public function delete($id){
    
        // $id = $_POST['id_tema'];
         $sliderD = new Slider();
    
        $sliderD->asObject()->find($id);

        if($sliderD==null){
            throw PageNotFoundException::forPageNotFound();
        }
        $sliderD->delete($id);

        return redirect()->to(base_url('/administrador'))->with('mensaje', '7');
}

public function edit($id)
{
    $sliderE = new Slider();
    $data = ["id_slider" =>$id];
    $datos = $sliderE->obtenerSliderID($data);
    $mensaje=session('mensaje');
    $slider = $sliderE->asObject()->find($id);

    if($slider == null){
        throw PageNotFoundException::forPageNotFound();
    }
    
    $validation = \Config\Services::validation();
    return view('edit_slider', ['validation' => $validation, 'slider' => $slider, 'datos'=>$datos, 'mensaje'=> $mensaje]);
}


public function update($id){

    $descripcion = $this->request->getPost('descripcion');
    $estatus = $this->request->getPost('estatus');

    $datos= [
        "descripcion" => $descripcion,
        "estatus" => $estatus
    ];

    $id = $_POST['id_slider'];

    $sliderA = new Slider();

    $respuesta= $sliderA->updateSlider($id, $datos);
    
    return redirect()->to(base_url('/administrador'))->with('mensaje', '8');
}

}
