<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Device_Config extends Model
{
    use HasFactory;

    protected $table = 'device__configs';

    public function Devices(){
        $this->blongsTo(Devices::class);
    }
}
