<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Devices extends Model
{
    use HasFactory;

    protected $fillable = [
        'device_name',
        'device_type',
    ];

    public function registered_devices(){
        return $this->hasMany(registered_devices::class);
    }

    public function device__configs(){
        return $this->hasMany(Device_Config::class);
    }
}
