<?php

namespace App\Controllers;
use App\Models\Investigaciones;
use App\Models\Temas;

class Investigadores extends BaseController
{
    public function index()
    {
       
        $investigacionesR = new Investigaciones();
        $temas = new Temas();
        $tema = $temas->findAll();
        $datos = $investigacionesR->obtenerInvestigaciones();
        $model = model('Temas');
        $mensaje=session('mensaje');
        $data = [
            "datos" => $datos,
            "mensaje" => $mensaje,
            "tema"=>$tema
        ];
        
        
        $validation = \Config\Services::validation();

        return view('centro_documental_admin', ['validation' => $validation, 'datos' =>$datos, 'tema' => $tema, 'mensaje'=> $mensaje,]);
    }

    public function createInv(){

        $investigacionN = new Investigaciones();

        
        $nombre = $this->request->getPost('nombre');
        $año = $this->request->getPost('año');
        $descripcion = $this->request->getPost('descripcion');
        $estatus = $this->request->getPost('estatus');
        $id_tema = $this->request->getPost('id_tema');
        $image = $this->request->getPost('image');
        

        if($this->validate('investigaciones')){
            $id = $investigacionN->insert(
                [
                    'nombre' => $nombre,
                    'año' => $año,
                    'descripcion' => $descripcion,
                    'estatus' => $estatus,
                    'id_tema' => $id_tema,
                ]
            );
            $res=$this->_uploadImage($id);
            $res2=$this->_uploadDoc($id);
            
            if ($res==null && $res2==null) {
                    return redirect()->to(base_url('/investigadores'))->with('mensaje', '2');
                }else if ($res ==!null){
                    return redirect()->to(base_url('/investigadores/edit/'.$id))->with('mensaje', '4');
                }else if ($res2 ==!null){
                    return redirect()->to(base_url('/investigadores/edit/'.$id))->with('mensaje', '5');
            }
        }
        return redirect()->to(base_url('/investigadores'))->with('mensaje', '3');

    }

    public function edit($id)
    {
        $investigacionE = new Investigaciones();
        $temas = new Temas();
        $data = ["id_investigacion" =>$id];
        $datos = $investigacionE->obtenerInv($data);
        $tema = $temas->findAll();
        $mensaje=session('mensaje');
        $data = [
            "datos" => $datos,
        ];
        $investigacion = $investigacionE->asObject()->find($id);

        if($investigacion == null){
            throw PageNotFoundException::forPageNotFound();
        }
        
        $validation = \Config\Services::validation();
        return view('centro_documental_admin_edit', ['validation' => $validation, 'investigacion' => $investigacion, 'datos'=>$datos, 'mensaje'=> $mensaje,'tema'=>$tema]);
    }
    public function delete($id){
    
            // $id = $_POST['id_tema'];
            $investigacionD = new Investigaciones();
            $investigacionD->asObject()->find($id);
    
            if($investigacionD==null){
                throw PageNotFoundException::forPageNotFound();
            }
            $investigacionD->delete($id);
    
            return redirect()->to(base_url('/investigadores'))->with('mensaje', '4');
    }
    
        

    public function update($id){

        $informe = $this->request->getPost('informe');
        $id_tema = $this->request->getPost('id_tema');

        $datos= [
            "nombre" => $_POST['nombre'],
            "descripcion" => $_POST['descripcion'],
            "año" => $_POST['año'],
            "informe" => $informe,
            "estatus" => $_POST['estatus'],
            "id_tema" => $id_tema
        ];

        $id = $_POST['id_investigacion'];

        $investigacionA = new Investigaciones();

        $respuesta= $investigacionA->updateInv($id, $datos);

        $res=$this->_uploadImage($id);
        $res2=$this->_uploadDoc($id);
        

        if ($res==null && $res2==null) {
            return redirect()->to(base_url('/investigadores'))->with('mensaje', '1');
        }else if ($res ==!null){
            return redirect()->to(base_url('investigadores/edit/'.$id))->with('mensaje', '2');
        }else if ($res2 ==!null){
            return redirect()->to(base_url('/investigadores/edit/'.$id))->with('mensaje', '3');
        }
    }

   private function _uploadImage($id)
    {
    if($imageFile = $this->request->getFile('informe')){
        if($imageFile->isValid() && !$imageFile->hasMoved()){
            //validaciones 
            $validated = $this->validate([
                'informe' => [
                    'uploaded[informe]',
                    'mime_in[informe,image/jpg,image/jpeg,image/gif,image/png]'
                ]
            ]);
            if($validated){
                $newName = $imageFile->getRandomName();
                $imageFile->move(ROOTPATH.'public/images_investigaciones/'.$id,$newName);

                $investigacionA = new Investigaciones();
                $respuesta= $investigacionA->updateInv($id, [
                    'informe' => $newName
                ]);
                return null;
            }else{
                return  $this->validator->getError('informe');
            }
        }
    }

        
    }
    
    private function _uploadDoc($id)
    {
        if($imageFile = $this->request->getFile('archivo')){
            if($imageFile->isValid() && !$imageFile->hasMoved()){
                //validaciones 
                $validated = $this->validate([
                    'archivo' => [
                        'uploaded[archivo]',
                        'ext_in[archivo,docx,pdf]'
                    ]
                ]);
                if($validated){
                    $newName = $imageFile->getRandomName();
                    $imageFile->move(ROOTPATH.'public/documentos_investigaciones/'.$id,$newName);
    
                    $investigacionA = new Investigaciones();
                    $respuesta= $investigacionA->updateInv($id, [
                        'archivo' => $newName
                    ]);
                    return null;
                }else{
                    return  $this->validator->getError('archivo');
                }
            }
        }

        
    }
    
}
