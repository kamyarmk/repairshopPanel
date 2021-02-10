<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegisteredDevices extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'userId',
        'Device',
        'DeviceType',
        'DeviceColor',
        'IMEI',
        'Problems',
        'DeviceDescription',
        'password',
        'DeviceAccessories',
        'Tips',
        'MaxBudget',
        'Condition',
    ];
}