<?php

namespace App\Controllers;
use App\Models\Investigaciones;
use App\Models\Temas;   

class Centro_documental extends BaseController
{
    public function index()
    {
        $mensaje=session('mensaje');
        $status='A';
        $temasR = new Temas();
        $datosT = $temasR->obtenerTemaActivoByDescripcion();
        $investigacionR = new Investigaciones();
        $datos = $investigacionR->where('estatus', $status)->obtenerTema();
        $datosA = $investigacionR->where('estatus', $status)->obtenerTemaID();
        return view('centro_documental',['datos' => $datos, 'datosT' => $datosT, 'mensaje'=> $mensaje, 'datosA'=>$datosA]);
    }

    public function ByNombre(){
        $mensaje=session('mensaje');
        $text = $this->request->getPost('nombre');
        $tema = $this->request->getPost('id_tema');
        $investigacionB = new Investigaciones();
        $buscarNombre = $investigacionB->ByNombre($text);
        $buscarTema = $investigacionB->ByTema($tema);
        $temasR = new Temas();
            $datosT = $temasR->obtenerTemaActivoByDescripcion();

        if($text ==!null){
            
            if($buscarNombre ==!null){
                return view('centro_documental_nombre', ['buscarNombre' => $buscarNombre, 'datosT' => $datosT]);
            }
            return redirect()->to(base_url('centro-documental'))->with('mensaje', '1');
            
        }else if($tema ==!null){
            if($buscarTema ==!null){
                return view('centro_documental_tema', ['buscarTema' => $buscarTema, 'datosT' => $datosT]);
            }
            return redirect()->to(base_url('centro-documental'))->with('mensaje', '3');
           
        }
        return redirect()->to(base_url('centro-documental'))->with('mensaje', '2');
            
       
    }
}
