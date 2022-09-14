<?php namespace App\Models;
    use CodeIgniter\Model;

    class Directorios extends Model{

        protected $table ='directorio';
        protected $primaryKey ='id_directorio';
        protected $allowedFields = ['descripcion','estatus', 'fecha_modificacion'];

        public function readDirectorio(){
            $tema = $this->db->table('directorio');
            $tema->select('*');
			return $tema->get()->getResultArray();
        }


    }