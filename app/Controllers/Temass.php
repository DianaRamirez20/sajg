<?php

namespace App\Controllers;
use App\Models\Temas;

class Temass extends BaseController
{
    public function index()
    {
        $temas = new Temas();
        $tema = $temas->obtenerTemaActivoBy();
        $temaD = $temas->obtenerTemaActivoByDescripcion();
        return view('temas', ['tema'=> $tema, 'temaD' => $temaD]);
    }

    public function search()
    {
        $tema = $this->request->getPost('descripcionTema');
        $temasR = new Temas();
        $buscarTema = $temasR->ByTema($tema);
   
            $datosT = $temasR->obtenerTemaActivoByDescripcion();

        if($tema ==!null){
            if($buscarTema ==!null){
                return view('temas_search', ['buscarTema' => $buscarTema, 'datosT' => $datosT]);
            }
            return redirect()->to(base_url('temasView'))->with('mensaje', '3');
           
        }
        return redirect()->to(base_url('temasView'))->with('mensaje', '2');
            
    }
}
