<?php namespace App\Models;
    use CodeIgniter\Model;

    class Derecho_Social extends Model{

        protected $table ='derecho_social';
        protected $primaryKey ='id_derecho';
        protected $allowedFields = ['descripcion','estatus', 'fecha_modificacion'];

        public function obtenerDerecho(){
            $tema = $this->db->table('derecho_social');
            $tema->select('*');
			$tema->where('estatus =', 'A');
			return $tema->get()->getResultArray();
        }

        public function obtenerDerechoOrdenado(){
            $tema = $this->db->table('derecho_social');
            $tema->select('*');
			$tema->where('estatus =', 'A');
            $tema->groupby('descripcion');
			return $tema->get()->getResultArray();
        }

        public function obtenerDerechos(){
            $derecho = $this->db->table('derecho_social');
            $derecho->select('*');
			return $derecho->get()->getResultArray(); 
        }

        public function editDerecho($data){
            $usuario = $this->db->table('derecho_social');
            $usuario->select('*');
            $usuario->where('id_derecho =', $data);
            return $usuario->get()->getResultArray();

        }

        
        public function updateDerecho($id, $data){
            $usuario = $this->db->table('derecho_social');
			$usuario->set($data);
			$usuario->where('id_derecho', $id);
			return $usuario ->update();
        }
    }