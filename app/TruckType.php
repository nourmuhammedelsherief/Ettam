<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TruckType extends Model
{
    protected $table = 'truck_types';
    protected $fillable = [
        'ar_name',
        'en_name',
        'ur_name',
    ];
}
