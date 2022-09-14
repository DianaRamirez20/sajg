<?php

namespace App\Controllers;
use App\Models\Temas;

class Tema extends BaseController
{
    public function index()
    {
        $temasR = new Temas();
        $datos = $temasR->findAll();
        $mensaje=session('mensaje');
        $data = [
            "datos" => $datos,
            "mensaje" => $mensaje
        ];
        
        
        $validation = \Config\Services::validation();

        return view('temas_admin', ['validation' => $validation, 'datos' =>$datos, 'mensaje'=> $mensaje,]);
    }

    public function createTema(){

        $temasN = new Temas();

        $descripcion = $this->request->getPost('descripcion');
        $estatus = $this->request->getPost('estatus');
        $nombre = $this->request->getPost('nombre');
        $link = $this->request->getPost('link');
        

        if($this->validate('temas')){
            $id = $temasN->insert(
                [
                    'descripcionTema' => $descripcion,
                    'estatusTema' => $estatus,
                    'link' => $link,
                    'descripcionMas' => $nombre
                ]
            );
            $res=$this->_uploadImage($id);
            
            if ($res==null) {
                    return redirect()->to(base_url('/temas'))->with('mensaje', '2');
                }else{
                    return redirect()->to(base_url('/temas/edit/'.$id))->with('mensaje', '2');
                }
        }
        return redirect()->to(base_url('/temas'))->with('mensaje', '3');

    }

    public function edit($id)
    {
        $temasE = new Temas();
        $data = ["id_tema" =>$id];
        $datos = $temasE->obtenerTema($data);
        $mensaje=session('mensaje');
        $data = [
            "datos" => $datos,
        ];
        $tema = $temasE->asObject()->find($id);

        if($tema == null){
            throw PageNotFoundException::forPageNotFound();
        }
        
        $validation = \Config\Services::validation();
        return view('temas_admin_edit', ['validation' => $validation, 'tema' => $tema, 'datos'=>$datos, 'mensaje'=> $mensaje]);
    }

    public function delete($id){
    
        // $id = $_POST['id_tema'];
        $temasD = new Temas();
        $temasD->asObject()->find($id);

        if($temasD==null){
            throw PageNotFoundException::forPageNotFound();
        }
        $temasD->delete($id);

            return redirect()->to(base_url('/temas'))->with('mensaje', '4');
    }

    public function update($id){

        $imagen = $this->request->getPost('imagen');

        $datos= [
            "descripcionTema" => $_POST['descripcion'],
            "descripcionMas" => $_POST['descripcionMas'],
            "link" => $_POST['link'],
            "imagen" => $imagen,
            "estatusTema" => $_POST['estatus']
        ];

        $id = $_POST['id_tema'];

        $temaA = new Temas();

        $respuesta= $temaA->updateTema($id, $datos);

        $res=$this->_uploadImage($id);
        

        if ($res==null) {
            return redirect()->to(base_url('/temas'))->with('mensaje', '1');
        }else{
            return redirect()->to(base_url('/temas_admin_edit'))->with('mensaje', '2');
        }
    }

   private function _uploadImage($id)
    {
    if($imageFile = $this->request->getFile('imagen')){
        if($imageFile->isValid() && !$imageFile->hasMoved()){
            //validaciones 
            $validated = $this->validate([
                'imagen' => [
                    'uploaded[imagen]',
                    'mime_in[imagen,image/jpg,image/jpeg,image/gif,image/png]'
                ]
            ]);
            if($validated){
                $newName = $imageFile->getRandomName();
                $imageFile->move(ROOTPATH.'public/images_temas/'.$id,$newName);

                $temasA = new Temas();
                $respuesta= $temasA->updateTema($id, [
                    'imagen' => $newName
                ]);
                return null;
            }else{
                return  $this->validator->getError('imagen');
            }
        }
    }

        
    }
    
}
