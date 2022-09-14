<?php namespace App\Models;
    use CodeIgniter\Model;

    class Dependencia extends Model{

        protected $table ='dependencia';
        protected $primaryKey ='id_dependencia';
        protected $allowedFields = ['descripcion_D','estatus_D', 'fecha_modificacion_D'];

        public function obtenerDependencia(){
            $tema = $this->db->table('dependencia');
            $tema->select('*');
			$tema->where('estatus_D =', 'A');
			return $tema->get()->getResultArray();
        }
        public function obtenerDependencias(){
            $tema = $this->db->table('dependencia');
            $tema->select('*');
			return $tema->get()->getResultArray();
        }

        public function editDependencias($data){
            $usuario = $this->db->table('dependencia');
            $usuario->select('*');
            $usuario->where('id_dependencia =', $data);
            return $usuario->get()->getResultArray();

        }

        public function updateDependencia($id, $data){
            $usuario = $this->db->table('dependencia');
			$usuario->set($data);
			$usuario->where('id_dependencia', $id);
			return $usuario ->update();
        }

        public function obtenerDependenciaOrdenado(){
            $tema = $this->db->table('dependencia');
            $tema->select('*');
			$tema->where('estatus_D =', 'A');
            $tema->groupby('descripcion_D');
			return $tema->get()->getResultArray();
        }


    }