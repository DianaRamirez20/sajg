<?php

namespace App\Controllers;
use App\Models\Usuarios;

class Login extends BaseController
{
    public function index()
    {
        return view('login');
    }

    public function entrar()
    {
        $correo = $this->request->getPost('correo');
        $usuario = $this->request->getPost('usuario');
        $contrasena = $this->request->getPost('contrasena');
        $Usuario = new Usuarios();

        $datosUsuario = $Usuario->where('correo', $correo)->first();

        if(count($datosUsuario)>0 && $contrasena==$datosUsuario['contrasena']){
            $data= [
                "correo" => $datosUsuario['correo'],
                "usuario" => $datosUsuario['usuario'],
                "nombre" => $datosUsuario['nombre']

            ];

            if($datosUsuario['usuario'] == 'investigador'){
                $session = session();
                $session->set($data);  
                return redirect()->to(base_url('/investigadores'));
            }else if($datosUsuario['usuario'] == 'admin'){
                $session = session();
                $session->set($data);  
                
                return redirect()->to(base_url('/administrador'));
            }else if($datosUsuario['usuario'] == 'encuestas'){
                $session = session();
                $session->set($data);  
                return redirect()->to(base_url('/encuesta'));

            }else if($datosUsuario['usuario'] == 'apoyos y servicios'){
                $session = session();
                $session->set($data);  
                return redirect()->to(base_url('/apoyosAdmin'));
            }
        }else{
            return redirect()->to(base_url('/login'));
        }
    }

    public function salir(){
        $session=session();
        $session->destroy();
        return redirect()->to(base_url('/login'));

    }

   
}