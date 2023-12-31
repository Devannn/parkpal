<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spot extends Model
{
    protected $table = 'spots';

    public function licensePlate()
    {
        return $this->hasOne(LicensePlate::class, 'id', 'spot_id', 'occupied');
    }
}
