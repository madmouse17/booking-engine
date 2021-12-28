<?php

namespace App\Models;

use CodeIgniter\Model;

class Hotel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'hotels';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['nama_hotel', 'alamat', 'image_hotel'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    public function getDetails()
    {
        return $this->db->table('hotels')
            ->join('hoteldetails', 'hoteldetails.hotel_id=hotels.id')
            ->join('fasilitas', 'fasilitas.hoteldetails_id=hoteldetails.id')
            ->get()->getResultArray();
    }

    public function getId($id)
    {
        return $this->db->table('hotels')
            ->where('hotels.id', $id)
            ->join('hoteldetails', 'hoteldetails.hotel_id=hotels.id')
            ->join('fasilitas', 'fasilitas.hoteldetails_id=hoteldetails.id')
            ->get()->getResultArray();
    }

    function create($table, $data)
    {
        // $db = db_connect();
        $query = $this->insert($table, $data);
        return $this->insert_id(); // return last insert id
    }
}
