<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LicensePlate extends Model
{
    protected $table = 'license_plates';
    protected $fillable = ['name', 'spot_id'];
}
