<?php namespace App\Models;
    use CodeIgniter\Model;
use App\Models\Temas;

    class Investigaciones extends Model{

        protected $table ='investigaciones';
        protected $primaryKey ='id_investigacion';
        protected $allowedFields = ['nombre', 'descripcion','año', 'id_tema','archivo','informe','estatus', 'fecha_modificacion'];

       public function createUser($data){
            return $this->insert($data);
        }

        public function readInv(){
            return $this->findAll();
        }


         public function obtenerInv($data){
            $usuario = $this->db->table('tema');
            $usuario->select('*');
            $usuario->where('id_investigacion =', $data);
            $usuario->join('investigaciones', 'investigaciones.id_tema = tema.id_tema');

            return $usuario->get()->getResultArray();

        }

        public function obtenerInvestigaciones(){
            $builder= $this->db->table('tema');
            $builder->select('*');
            $builder->join('investigaciones', 'investigaciones.id_tema = tema.id_tema');
            $query = $builder->get(); 
            return $query->getResultArray();
        }

        public function obtenerTema(){
            $builder= $this->db->table('tema');
            $builder->select('*');
            $builder->where('estatus =', 'A');
            $builder->where('estatusTema =', 'A');
            $builder->join('investigaciones', 'investigaciones.id_tema = tema.id_tema');
            $query = $builder->get(); 
            return $query->getResultArray();
        }


        public function obtenerTemaActivo(){
            $builder= $this->db->table('tema');
            $builder->select('*');
            $builder->where('estatusTema =', 'A');
            $builder->join('investigaciones', 'investigaciones.id_tema = tema.id_tema');
            $query = $builder->get(); 
            return $query->getResultArray();
        }

      
        public function updateInv($id, $data){
            $usuario = $this->db->table('investigaciones');
			$usuario->set($data);
			$usuario->where('id_investigacion', $id);
			return $usuario ->update();
        }

        public function ByNombre($data){
            $usuario = $this->db->table('tema');
            $usuario->select('*');
			$usuario->like('nombre', $data);
            $usuario->where('estatus=', 'A');
            $usuario->join('investigaciones', 'investigaciones.id_tema = tema.id_tema');
			$query = $usuario->get(); 
            return $query->getResultArray();
        }

        public function ByTema($tema){
            $usuario = $this->db->table('tema');
            $usuario->select('*');
			$usuario->where('investigaciones.id_tema', $tema);
            $usuario->where('estatus=', 'A');
            $usuario->join('investigaciones', 'investigaciones.id_tema = tema.id_tema');
			$query = $usuario->get(); 
            return $query->getResultArray();
        }
        
        public function obtenerTemaID(){
            $builder= $this->db->table('tema');
            $builder->select('id_investigacion, archivo');
            $builder->where('estatus =', 'A');
            $builder->where('estatusTema =', 'A');
            $builder->join('investigaciones', 'investigaciones.id_tema = tema.id_tema');
            $query = $builder->get(); 
            return $query->getResultArray();

        }


        

    
        
    }