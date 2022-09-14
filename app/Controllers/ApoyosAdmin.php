<?php

namespace App\Controllers;
use App\Models\Apoyo;
use App\Models\Derecho_Social;
use App\Models\Dependencia;
use App\Models\Tipo_Apoyo;
use App\Models\Normatividad;
use App\Models\Temas;

class ApoyosAdmin extends BaseController
{
    public function index()
    {
        $normatividadR = new Normatividad();
        $apoyoR = new Apoyo();
        $derechos = new Derecho_Social();
        $dependencias = new Dependencia();
        $apoyos = new Tipo_Apoyo();
        $temas = new Temas();
        $mensaje=session('mensaje');
        $datos = $apoyoR->obtenerApoyos();
        $derecho = $derechos->obtenerDerechos();
        $dependencia = $dependencias->obtenerDependencias();
        $apoyo = $apoyos->obtenerApoyos();
        $normatividad = $normatividadR->obtenerNormatividades();
        $derechoOrdenado = $derechos->obtenerDerechoOrdenado();
        $temaOrdenado = $temas->obtenerTemaActivoByDescripcion();
        $dependenciaOrdenado = $dependencias->obtenerDependenciaOrdenado();
        $apoyoOrdenado = $apoyos->obtenerApoyoOrdenado();
        $normatividadOrdenado = $normatividadR->obtenerNormatividadOrdenado();
        return view('apoyos_admin', [ 'mensaje'=> $mensaje, 'datos' => $datos, 'derecho'=>$derecho,
        'dependencia' => $dependencia, 'apoyo' => $apoyo, 'normatividad'=>$normatividad, 
        'derechoOrdenado'=>$derechoOrdenado, 'temaOrdenado'=>$temaOrdenado, 'dependenciaOrdenado'=> $dependenciaOrdenado,
        'apoyoOrdenado'=>$apoyoOrdenado, 'normatividadOrdenado'=>$normatividadOrdenado]);
    }

    public function createApoyo(){

        $apoyoN = new Apoyo();

        
        $orden = $this->request->getPost('orden');
        $id_derecho = $this->request->getPost('id_derecho');
        $tema = $this->request->getPost('tema');
        $dependencia = $this->request->getPost('dependencia');
        $programa = $this->request->getPost('programa');
        $estatus = $this->request->getPost('estatus');
        $año = $this->request->getPost('año');
        $objetivo_general = $this->request->getPost('objetivo_general');
        $rango = $this->request->getPost('rango');
        $poblacion = $this->request->getPost('poblacion');
        $apoyo = $this->request->getPost('apoyo');
        $monto = $this->request->getPost('monto');
        $responsable = $this->request->getPost('responsable');
        $telefono = $this->request->getPost('telefono');
        $correo = $this->request->getPost('correo');
        $pagina = $this->request->getPost('pagina');
        $normatividad = $this->request->getPost('normatividad');
        $link = $this->request->getPost('link');
        $presupuesto = $this->request->getPost('presupuesto');
        

        if($this->validate('apoyos')){
            $id = $apoyoN->insert(
                [
                    'orden_gobierno' => $orden,
                    'id_derecho' => $id_derecho,
                    'id_tema' => $tema,
                    'id_dependencia' => $dependencia,
                    'programa_Social' => $programa,
                    'estatus_apoyo' => $estatus,
                    'año' => $año,
                    'objetivo_General' => $objetivo_general,
                    'rango_Edad' => $rango,
                    'poblacion_Objetivo' => $poblacion,
                    'id_tipo_apoyo' => $apoyo,
                    'monto_Anual' => $monto,
                    'responsable' => $responsable,
                    'telefono' => $telefono,
                    'correo' => $correo,
                    'pagina_Web' => $pagina,
                    'id_normatividad' => $normatividad,
                    'link_normartividad' => $link,
                    'presupuesto' => $presupuesto
                ]
            );
           
            return redirect()->to(base_url('/apoyosAdmin'))->with('mensaje', '2');
            
        }
        return redirect()->to(base_url('/apoyosAdmin'))->with('mensaje', '3');

    }

    public function deleteApoyo($id){

         $apoyoD = new Apoyo();
    
        $apoyoD->asObject()->find($id);

        if($apoyoD==null){
            throw PageNotFoundException::forPageNotFound();
        }
        $apoyoD->delete($id);

        return redirect()->to(base_url('/apoyosAdmin'))->with('mensaje', '17');
    }

    public function createDerecho(){

        $derechoN = new Derecho_Social();

        
        $descripcionDerecho = $this->request->getPost('descripcionDerecho');
        $estatusDerecho = $this->request->getPost('estatusDerecho');
        

        if($this->validate('derechos')){
            $id = $derechoN->insert(
                [
                    'descripcion' => $descripcionDerecho,
                    'estatus' => $estatusDerecho
                ]
            );
           
            return redirect()->to(base_url('/apoyosAdmin'))->with('mensaje', '5');
            
        }
        return redirect()->to(base_url('/apoyosAdmin'))->with('mensaje', '6');

    }

    public function createDependencia(){

        $dependenciaN = new Dependencia();

        
        $descripcionDependencia = $this->request->getPost('descripcionDependencia');
        $estatusDependencia = $this->request->getPost('estatusDependencia');
        

        if($this->validate('dependencia')){
            $id = $dependenciaN->insert(
                [
                    'descripcion_D' => $descripcionDependencia,
                    'estatus_D' => $estatusDependencia
                ]
            );
           
            return redirect()->to(base_url('/apoyosAdmin'))->with('mensaje', '7');
            
        }
        return redirect()->to(base_url('/apoyosAdmin'))->with('mensaje', '8');

    }

    public function createTipoApoyo(){

        $tapoyoN = new Tipo_Apoyo();

        
        $descripcionApoyo = $this->request->getPost('descripcionApoyo');
        $estatusApoyo = $this->request->getPost('estatusApoyo');
        

        if($this->validate('tapoyo')){
            $id = $tapoyoN->insert(
                [
                    'descripcion_A' => $descripcionApoyo,
                    'estatus_A' => $estatusApoyo
                ]
            );
           
            return redirect()->to(base_url('/apoyosAdmin'))->with('mensaje', '9');
            
        }
        return redirect()->to(base_url('/apoyosAdmin'))->with('mensaje', '10');

    }

    public function deleteDerecho($id){
    
         $derechoD = new Derecho_Social();
    
        $derechoD->asObject()->find($id);

        if($derechoD==null){
            throw PageNotFoundException::forPageNotFound();

            
        }
        $derechoD->delete($id);

        return redirect()->to(base_url('/apoyosAdmin'));
    }

    public function deleteDependencia($id){
    
        $dependenciaD = new Dependencia();
   
       $dependenciaD->asObject()->find($id);

       if($dependenciaD==null){
           throw PageNotFoundException::forPageNotFound();
       }

        $dependenciaD->delete($id);

       return redirect()->to(base_url('/apoyosAdmin'));
   }

   public function deleteNormatividad($id){
    
    $normatividadD = new Normatividad();

   $normatividadD->asObject()->find($id);

   if($normatividadD==null){
       throw PageNotFoundException::forPageNotFound();
   }

    $normatividadD->delete($id);

   return redirect()->to(base_url('/apoyosAdmin'));
}

   public function deleteTApoyo($id){
        $tapoyoD = new Tipo_Apoyo();

        $tapoyoD->asObject()->find($id);

        if($tapoyoD==null){
            throw PageNotFoundException::forPageNotFound();
        }
        $tapoyoD->delete($id);

     return redirect()->to(base_url('/apoyosAdmin'));
    }

    public function editDerecho($id)
    {
        $derechoE = new Derecho_Social();
        $data = ["id_derecho" =>$id];
        $datos = $derechoE->editDerecho($data);
        $mensaje=session('mensaje');
        $data = [
            "datos" => $datos,
        ];
        $derecho = $derechoE->asObject()->find($id);

        if($derecho == null){
            throw PageNotFoundException::forPageNotFound();
        }
        
        $validation = \Config\Services::validation();
        return view('edit_derecho', ['validation' => $validation, 'derecho' => $derecho, 'datos'=>$datos, 'mensaje'=> $mensaje]);
    }

    public function editDependencia($id)
    {
        $dependenciaE = new Dependencia();
        $data = ["id_dependencia" =>$id];
        $datos = $dependenciaE->editDependencias($data);
        $mensaje=session('mensaje');
        $data = [
            "datos" => $datos,
        ];
        $dependencia = $dependenciaE->asObject()->find($id);

        if($dependencia == null){
            throw PageNotFoundException::forPageNotFound();
        }
        
        $validation = \Config\Services::validation();
        return view('edit_dependencia', ['validation' => $validation, 'dependencia' => $dependencia, 'datos'=>$datos, 'mensaje'=> $mensaje]);
    }

    public function editTApoyo($id)
    {
        $tapoyoE = new Tipo_Apoyo();
        $data = ["id_tipo_apoyo" =>$id];
        $datos = $tapoyoE->editTApoyos($data);
        $mensaje=session('mensaje');
        $data = [
            "datos" => $datos,
        ];
        $tapoyo = $tapoyoE->asObject()->find($id);

        if($tapoyo == null){
            throw PageNotFoundException::forPageNotFound();
        }
        
        $validation = \Config\Services::validation();
        return view('edit_tapoyo', ['validation' => $validation, 'tapoyo' => $tapoyo, 'datos'=>$datos, 'mensaje'=> $mensaje]);
    }

    public function updateTApoyo($id){

        $descripcion_A = $this->request->getPost('descripcion_A');
        $estatus_A = $this->request->getPost('estatus_A');

        $datos= [
            "descripcion_A" => $descripcion_A,
            "estatus_A" => $estatus_A
        ];

        $id = $_POST['id_tipo_apoyo'];

        $tapoyoA = new Tipo_Apoyo();

        $tapoyoA->updateTApoyo($id, $datos);

    
            return redirect()->to(base_url('/apoyosAdmin'))->with('mensaje', '14');
      
    }

    public function updateDependencia($id){

        $descripcion_D = $this->request->getPost('descripcion_D');
        $estatus_D = $this->request->getPost('estatus_D');

        $datos= [
            "descripcion_D" => $descripcion_D,
            "estatus_D" => $estatus_D
        ];

        $id = $_POST['id_dependencia'];

        $dependenciaA = new Dependencia();

        $dependenciaA->updateDependencia($id, $datos);

    
            return redirect()->to(base_url('/apoyosAdmin'))->with('mensaje', '15');
      
    }

    public function updateDerecho($id){

        $descripcion = $this->request->getPost('descripcion');
        $estatus = $this->request->getPost('estatus');
    
        $datos= [
            "descripcion" => $descripcion,
            "estatus" => $estatus
        ];
    
        $id = $_POST['id_derecho'];
    
        $derechoA = new Derecho_Social();
    
        $derechoA->updateDerecho($id, $datos);
    
    
            return redirect()->to(base_url('/apoyosAdmin'))->with('mensaje', '16');
    
      
    }

}