<?php namespace App\Models;
    use CodeIgniter\Model;

    class Normatividad extends Model{

        protected $table ='normatividad';
        protected $primaryKey ='id_normatividad';
        protected $allowedFields = ['descripcion_N','estatus_N', 'fecha_modificacion_N'];

        public function obtenerNormatividad(){
            $tema = $this->db->table('normatividad');
            $tema->select('*');
			$tema->where('estatus_N =', 'A');
			return $tema->get()->getResultArray();
        }

        public function obtenerNormatividades(){
            $derecho = $this->db->table('normatividad');
            $derecho->select('*');
			return $derecho->get()->getResultArray(); 
        }

        public function editNormatvidad($data){
            $usuario = $this->db->table('normatividad');
            $usuario->select('*');
            $usuario->where('id_normatividad =', $data);
            return $usuario->get()->getResultArray();

        }

        public function obtenerNormatividadOrdenado(){
            $tema = $this->db->table('normatividad');
            $tema->select('*');
			$tema->where('estatus_N =', 'A');
            $tema->groupby('descripcion_N');
			return $tema->get()->getResultArray();
        }
    }