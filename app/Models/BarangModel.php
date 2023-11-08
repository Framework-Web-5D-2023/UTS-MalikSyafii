<?php
namespace App\Models;
use CodeIgniter\Model;

class BarangModel extends Model
{
    protected $table = 'barang';
    protected $primarykey = 'id';
    protected $protectFields = false;
    public function getAllBarang(){
        return $this->findAll();
    }
    public function create($data){
        return $this->insert($data);
    }
}