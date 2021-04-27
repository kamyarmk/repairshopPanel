<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class usersDetails extends Model
{
    use HasFactory;
    protected $fillable = [
        'first_address',
        'seccond_address',
        'seccond_number',
        'company_name',
        'updated_at',
        'created_at'
    ];

    public function registered_devices(){
        return $this->belongsTo(User::class);
    }
}
