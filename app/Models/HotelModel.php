<?php

namespace App\Models;
use CodeIgniter\Model;

class HotelModel extends Model
{
    protected $table = 'hotel';
    protected $primaryKey = 'id_hotel';
    protected $allowedFields = ['nombre', 'categoria'];
}


