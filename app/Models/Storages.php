<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Storages extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function registered_devices(){
        return $this->hasMany(registered_devices::class);
    }
}
