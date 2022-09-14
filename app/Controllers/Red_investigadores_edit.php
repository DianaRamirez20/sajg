<?php

namespace App\Controllers;
use App\Models\Investigadores;
use App\Models\Objetivos;
use App\Models\Comisiones;

class Red_investigadores_edit extends BaseController
{
    public function index()
    {  
        $investigacionesR = new Investigadores();
        $objetivosR = new Objetivos();
        $comisionesR = new Comisiones();
        $datos = $investigacionesR->findAll();
        $data = $objetivosR->findAll();
        $info = $comisionesR->findAll();
        $mensaje=session('mensaje'); 
        
        $validation = \Config\Services::validation();

        return view('red_investigadores_edit', ['validation' => $validation, 'datos' =>$datos, 'data' => $data, 'mensaje'=> $mensaje, 'info'=>$info]);
    }

    public function createInv(){

        $investigadoresN = new Investigadores();

        
        $nombre = $this->request->getPost('nombre');
        $descripcion = $this->request->getPost('descripcion');
        $estatus = $this->request->getPost('estatusInvestigador');
        $imagen = $this->request->getPost('imagen');


        if ($this->validate([
            'estatusInvestigador' => 'required',
        ])) {
            $id = $investigadoresN->insert(
                [
                    'nombre' => $nombre,
                    'descripcion' => $descripcion,
                    'estatus' => $estatus
                ]
            );
            $res=$this->_uploadImage($id);
            
            if ($res==null) {
                    return redirect()->to(base_url('/red-investigadores-edit'))->with('mensaje', '2');
                }else{
                    return redirect()->to(base_url('/integrantes-investigadores/edit/'.$id))->with('mensaje', '1');
                }
        }
        return redirect()->to(base_url('/red-investigadores-edit'))->with('mensaje', '3');

    }

    public function createComTrab(){

        
        $comisionesN = new Comisiones();

        
        $descripcion = $this->request->getPost('descripcionComisiones');
        $estatus = $this->request->getPost('estatusComisiones');
        $imagen = $this->request->getPost('imagenComisiones');


        if ($this->validate([
            'estatusComisiones' => 'required',
        ])) {
            $id = $comisionesN->insert(
                [
                    'descripcion' => $descripcion,
                    'estatus' => $estatus
                ]
            );
            $res=$this->_uploadImageComisiones($id);
            
            if ($res==null) {
                    return redirect()->to(base_url('/red-investigadores-edit'))->with('mensaje', '10');
                }else{
                    return redirect()->to(base_url('/integrantes-investigadores/edit/'.$id))->with('mensaje', '11');
                }
        }

    }

    public function createObj(){

        $objetivosN = new Objetivos();

        
        $descripcion = $this->request->getPost('descripcionO');
        $estatus = $this->request->getPost('estatusO');
        if($this->validate('objetivos')){
            $id = $objetivosN->insert(
                [
                    'descripcion' => $descripcion,
                    'estatus' => $estatus,
                ]
            );
            return redirect()->to(base_url('/red-investigadores-edit'))->with('mensaje', '7');
        }
        return redirect()->to(base_url('/red-investigadores-edit'))->with('mensaje', '6');

    }

    public function editInv($id)
    {
        $investigadoresE = new Investigadores();
        $data = ["id_investigadores" =>$id];
        $datos = $investigadoresE->obtenerInv($data);
        $mensaje=session('mensaje');
        $data = [
            "datos" => $datos,
        ];
        $investigador = $investigadoresE->asObject()->find($id);

        if($investigador == null){
            throw PageNotFoundException::forPageNotFound();
        }
        
        $validation = \Config\Services::validation();
        return view('edit_integrante', ['validation' => $validation, 'investigador' => $investigador, 'datos'=>$datos, 'mensaje'=> $mensaje]);
    }


    public function editObj($id)
    {
        $objetivosE = new Objetivos();
        $data = ["id_objetivos" =>$id];
        $datos = $objetivosE->obtenerObj($data);
        $mensaje=session('mensaje');
        $data = [
            "datos" => $datos,
        ];
        $objetivo = $objetivosE->asObject()->find($id);

        if($objetivo == null){
            throw PageNotFoundException::forPageNotFound();
        }
        
        $validation = \Config\Services::validation();
        return view('edit_objetivo', ['validation' => $validation, 'objetivo' => $objetivo, 'datos'=>$datos, 'mensaje'=> $mensaje]);
    }

    public function editComTrab($id){
        $comisionesE = new Comisiones();
        $data = ["id_comisiones" =>$id];
        $datos = $comisionesE->obtenerCom($data);
        $mensaje=session('mensaje');
        $data = [
            "datos" => $datos,
        ];
        $comision = $comisionesE->asObject()->find($id);

        if($comision == null){
            throw PageNotFoundException::forPageNotFound();
        }
        
        $validation = \Config\Services::validation();
        return view('edit_comision', ['validation' => $validation, 'comision' => $comision, 'datos'=>$datos, 'mensaje'=> $mensaje]);
       
    }


    public function deleteInv($id){
    
        $investigadorD = new Investigadores();
        $investigadorD->asObject()->find($id);

        if($investigadorD==null){
            throw PageNotFoundException::forPageNotFound();
        }
        $investigadorD->delete($id);

        return redirect()->to(base_url('/red-investigadores-edit'))->with('mensaje', '4');
    }


    public function deleteObj($id)
    {
        $objetivoD = new Objetivos();
        $objetivoD->asObject()->find($id);

        if($objetivoD==null){
            throw PageNotFoundException::forPageNotFound();
        }
        $objetivoD->delete($id);

        return redirect()->to(base_url('/red-investigadores-edit'))->with('mensaje', '9');
    }


    public function deleteComTrab($id){
    
        $comisionD = new Comisiones();
        $comisionD->asObject()->find($id);

        if($comisionD==null){
            throw PageNotFoundException::forPageNotFound();
        }
        $comisionD->delete($id);

        return redirect()->to(base_url('/red-investigadores-edit'))->with('mensaje', '12');
    }


    public function updateInv($id){

        $imagen = $this->request->getPost('imagen');

        $datos= [
            "nombre" => $_POST['nombre'],
            "descripcion" => $_POST['descripcion'],
            "estatus" => $_POST['estatus'],
            "imagen" => $imagen,
        ];

        $id = $_POST['id_investigadores'];

        $investigadorA = new Investigadores();

        $respuesta= $investigadorA->updateInv($id, $datos);

        $res=$this->_uploadImage($id);
        

        if ($res==null){
            return redirect()->to(base_url('/red-investigadores-edit'))->with('mensaje', '1');
        }else{
            return redirect()->to(base_url('/integrantes-investigadores/edit/'.$id))->with('mensaje', '2');
        }
    }

    public function updateComTrab($id){
        $imagen = $this->request->getPost('imagen');

        $datos= [
            "descripcion" => $_POST['descripcion'],
            "estatus" => $_POST['estatus'],
            "imagen" => $imagen,
        ];

        $id = $_POST['id_comisiones'];

        $comisionA = new Comisiones();

        $respuesta= $comisionA->updateCom($id, $datos);

        $res=$this->_uploadImageComisiones($id);
        

        if ($res==null){
            return redirect()->to(base_url('/red-investigadores-edit'))->with('mensaje', '11');
        }else{
            return redirect()->to(base_url('/comisiones-investigadores/edit/'.$id))->with('mensaje', '2');
        }
    }

    public function updateObj($id){

        $datos= [
            "descripcion" => $_POST['descripcion'],
            "estatus" => $_POST['estatus']
        ];

        $id = $_POST['id_objetivos'];

        $objetivoA = new Objetivos();

        $respuesta= $objetivoA->updateObj($id, $datos);

    
        return redirect()->to(base_url('/red-investigadores-edit'))->with('mensaje', '8');
       
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
                    $imageFile->move(ROOTPATH.'public/images_integrantes/'.$id,$newName);

                    $investigadoresA = new Investigadores();
                    $respuesta= $investigadoresA->updateInv($id, [
                        'imagen' => $newName
                    ]);
                    return null;
                }else{
                    return  $this->validator->getError('imagen');
                }
            }
        }

        
    }
    

    private function _uploadImageComisiones($id)
    {
         if($imageFile = $this->request->getFile('imagenComisiones')){
            if($imageFile->isValid() && !$imageFile->hasMoved()){
            //validaciones 
                $validated = $this->validate([
                    'imagenComisiones' => [
                         'uploaded[imagenComisiones]',
                         'mime_in[imagenComisiones,image/jpg,image/jpeg,image/gif,image/png]'
                     ]
                ]);
                if($validated){
                    $newName = $imageFile->getRandomName();
                    $imageFile->move(ROOTPATH.'public/images_comisiones/'.$id,$newName);

                    $comisionesA = new Comisiones();
                    $respuesta= $comisionesA->updateCom($id, [
                        'imagen' => $newName
                    ]);
                    return null;
                }else{
                    return  $this->validator->getError('imagenComisiones');
                }
            }
        }

        
    }
    

}
