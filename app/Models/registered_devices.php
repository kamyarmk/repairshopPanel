<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class registered_devices extends Model
{
    use HasFactory;

    protected $table = 'registered_devices';

    protected $fillable = [
        'users_id',
        'devices_id',
        'color_id',
        'storage_id',
        'IMEI',
        'problems',
        'device_desc',
        'device_otherinfo',
        'condition',
        'device_password',
        'FirstQC',
        'SeccondQC',
        'deadline',
        'created_at',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function devices(){
        return $this->belongsTo(Devices::class);
    }

    public function color(){
        return $this->belongsTo(Colors::class);
    }

    public function storage(){
        return $this->belongsTo(Storages::class);
    }

    public function tasks(){
        return $this->hasMany(Tasks::class);
    }

    public function invoices(){
        return $this->hasOne(invoices::class);
    }
}
