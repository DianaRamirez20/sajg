<?php namespace App\Models;
    use CodeIgniter\Model;

    class Tipo_Apoyo extends Model{

        protected $table ='tipo_apoyo';
        protected $primaryKey ='id_tipo_apoyo';
        protected $allowedFields = ['descripcion_A','estatus_A', 'fecha_modificacion_A'];

        public function obtenerApoyo(){
            $tema = $this->db->table('tipo_apoyo');
            $tema->select('*');
			$tema->where('estatus_A =', 'A');
			return $tema->get()->getResultArray();
        }
        public function obtenerApoyos(){
            $tema = $this->db->table('tipo_apoyo');
            $tema->select('*');
			return $tema->get()->getResultArray();
        }

        
        public function editTApoyos($data){
            $usuario = $this->db->table('tipo_apoyo');
            $usuario->select('*');
            $usuario->where('id_tipo_apoyo =', $data);
            return $usuario->get()->getResultArray();

        }

        public function updateTApoyo($id, $data){
            $usuario = $this->db->table('tipo_apoyo');
			$usuario->set($data);
			$usuario->where('id_tipo_apoyo', $id);
			return $usuario ->update();
        }

        public function obtenerApoyoOrdenado(){
            $tema = $this->db->table('tipo_apoyo');
            $tema->select('*');
			$tema->where('estatus_A =', 'A');
            $tema->groupby('descripcion_A');
			return $tema->get()->getResultArray();
        }

    }