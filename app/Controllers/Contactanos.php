<?php

namespace App\Controllers;

class Contactanos extends BaseController
{
    public function index()
    {
        $mensaje=session('mensaje');
        $data = [
            "mensaje" => $mensaje
        ];
        return view('contactanos', $data);
    }

    public function EnviarMensaje(){

        $email = \Config\Services::email();

            $nombre = $this->request->getPost('nombre');
            $mensaje = $this->request-> getPost('mensaje');
            $correo = $this->request->getPost('correo');
  
      

        $email->setFrom($correo)
        ->setTo('ramirezbecerraid@gmail.com')
        ->setSubject($nombre)
        ->setMessage($mensaje);

        if(!$email->send())
        {
            return redirect()->to(base_url('/contactanos'))->with('mensaje','0');
        }else {
            return redirect()->to(base_url('/contactanos'))->with('mensaje','1');
        }

    }
}
