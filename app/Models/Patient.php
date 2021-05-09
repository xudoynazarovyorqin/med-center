<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;
    protected $fillable = [
        'region_id',
        'city_id',
        'surname',
        'name',
        'phone',
        'diagnos_main',        
        'diagnos_cardiolog',        
        'diagnos_xray',        
        'diagnos_eye',    
        'status'    
    ];

    protected $casts =[
        'diagnos_main' => 'array',
        'diagnos_cardiolog' => 'array',
        'diagnos_xray' => 'array',
        'diagnos_eye' => 'array'
    ];
}
