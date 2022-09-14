<?php

namespace App\Controllers;
use App\Models\Usuarios;


class AdministradorEdit extends BaseController
{
    public function index()
    {
        $usuarioR = new Usuarios();

        $datos = $usuarioR->readUsers();

        $data = [
            "datos" => $datos
        ];
        return view('editar_usuario', $data);
    }


    public function obtener($id){
        $data = ["id_user" =>$id];
        $usuarioO = new Usuarios();

        $respuesta = $usuarioO->obtenerUsuario($data);

        $datos = ["datos" => $respuesta];

        return view('editar_usuario', $datos);
        
    }

    public function delete($id){
    
        // $id = $_POST['id_tema'];
        $usuarioD = new Usuarios();
        $usuarioD->asObject()->find($id);

        if($usuarioD==null){
            throw PageNotFoundException::forPageNotFound();
        }
        $usuarioD->delete($id);

        return redirect()->to(base_url('/administrador'))->with('mensaje', '4');
}
}
