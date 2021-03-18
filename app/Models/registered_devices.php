<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class registered_devices extends Model
{
    use HasFactory;

    protected $table = 'registered_devices';

    protected $fillable = [
        'user_id',
        'devices_id',
        'DeviceType',
        'DeviceColor',
        'IMEI',
        'Problems',
        'DeviceDescription',
        'password',
        'DeviceAccessories',
        'Tips',
        'FirstQC',
        'SeccondQC',
        'MaxBudget',
        'Condition',
    ];

    public function users(){
        return $this->belongsTo(User::class);
    }

    public function devices(){
        return $this->belongsTo(Devices::class);
    }

    public function invoices(){
        return $this->hasOne(invoices::class);
    }
}
