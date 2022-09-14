<?php namespace App\Models;
    use CodeIgniter\Model;

    class Temas extends Model{

        protected $table ='tema';
        protected $primaryKey ='id_tema';
        protected $allowedFields = ['descripcionTema', 'imagen', 'estatusTema','fecha_modificacionTema', 'link', 'descripcionMas'];

        public function createTema($data){
            return $this->insert($data);
        }

        public function readTema(){
            return $this->findAll();
        }


         public function obtenerTema($data){
            $tema = $this->db->table('tema');
            $tema->where($data);
            return $tema->get()->getResultArray();
        }
        
        public function updateTema($id, $data){
            $tema = $this->db->table('tema');
			$tema->set($data);
			$tema->where('id_tema', $id);
			return $tema ->update();
        }

        public function obtenerTemaActivo(){
            $tema = $this->db->table('tema');
            $tema->select('*');
			$tema->where('estatusTema =', 'A');
			return $tema->get()->getResultArray();
        }

        public function obtenerTemaActivoBy(){
            $tema = $this->db->table('tema');
            $tema->select('*');
			$tema->where('estatusTema =', 'A');
            $tema->orderby('descripcionTema');
			return $tema->get()->getResultArray();
        }

        public function obtenerTemaActivoByDescripcion(){
            $tema = $this->db->table('tema');
            $tema->select('*');
			$tema->where('estatusTema =', 'A');
            $tema->groupby('descripcionTema');
			return $tema->get()->getResultArray();
        }

        public function ByTema($tema){
            $usuario = $this->db->table('tema');
            $usuario->select('*');
			$usuario->where('descripcionTema',$tema);
            $usuario->where('estatusTema=', 'A');
			$query = $usuario->get(); 
            return $query->getResultArray();
        }

        
       

    }