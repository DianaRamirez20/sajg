<?php namespace App\Models;
    use CodeIgniter\Model;
    use App\Models\Temas;
    use App\Models\Dependencia;
    use App\Models\Derecho_Social;
    use App\Models\Tipo_Apoyo;
    use App\Model\Normatividad;

    class Apoyo extends Model{

        protected $table ='apoyos';
        protected $primaryKey ='id_apoyos';
        protected $allowedFields = ['orden_gobierno','id_derecho','id_tema', 'id_dependencia','programa_Social','estatus_apoyo','año',
        'objetivo_General','poblacion_Objetivo','rango_Edad','edad','id_tipo_apoyo','monto_Anual','presupuesto','telefono',
        'correo','pagina_Web','id_normatividad','link_normartividad', 'responsable'];

        public function ByTema($tema){
            $usuario = $this->db->table('tema');
            $usuario->select('*');
			$usuario->where('apoyos.id_tema', $tema);
            $usuario->join('apoyos', 'apoyos.id_tema = tema.id_tema');
			$query = $usuario->get(); 
            return $query->getResultArray();
        }

        public function ByDerecho($derecho){
            $usuario = $this->db->table('derecho_social');
            $usuario->select('*');
			$usuario->where('apoyos.id_derecho', $derecho);
            $usuario->join('apoyos', 'apoyos.id_derecho = derecho_social.id_derecho');
			$query = $usuario->get(); 
            return $query->getResultArray();
        }

        public function ByDependencia($dependencia){
            $usuario = $this->db->table('dependencia');
            $usuario->select('*');
			$usuario->where('apoyos.id_dependencia', $dependencia);
            $usuario->join('apoyos', 'apoyos.id_dependencia = dependencia.id_dependencia');
			$query = $usuario->get(); 
            return $query->getResultArray();
        }


        public function ByApoyo($apoyo){
            $usuario = $this->db->table('tipo_apoyo');
            $usuario->select('*');
			$usuario->where('apoyos.id_tipo_apoyo', $apoyo);
            $usuario->join('apoyos', 'apoyos.id_tipo_apoyo = tipo_apoyo.id_tipo_apoyo');
			$query = $usuario->get(); 
            return $query->getResultArray();
        }

        
        public function ByAño($año){
            $usuario = $this->db->table('apoyos');
            $usuario->select('*');
			$usuario->where('apoyos.año', $año);
			$query = $usuario->get(); 
            return $query->getResultArray();
        }

        public function obtenerApoyos(){
            $usuario = $this->db->table('apoyos');
            $usuario->select('*');
            $usuario->join('derecho_social', 'apoyos.id_derecho = derecho_social.id_derecho');
            $usuario->join('tipo_apoyo', 'apoyos.id_tipo_apoyo = tipo_apoyo.id_tipo_apoyo');
            $usuario->join('tema', 'apoyos.id_tema = tema.id_tema');
            $usuario->join('dependencia', 'apoyos.id_dependencia = dependencia.id_dependencia');
            $usuario->join('normatividad', 'apoyos.id_normatividad = normatividad.id_normatividad');
			$query = $usuario->get(); 
            return $query->getResultArray();
        }
    }