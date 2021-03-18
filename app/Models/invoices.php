<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class invoices extends Model
{
    use HasFactory;
    use Notifiable;

    protected $table = 'invoices';

    public function users(){
        return $this->belongsTo(User::class);
    }

    public function registered_devices(){
        return $this->belongsTo(registered_devices::class);
    }
}
