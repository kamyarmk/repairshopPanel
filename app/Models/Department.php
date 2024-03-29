<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    protected $fillable = [
        'department_name',
        'department_level',
        'department_symbol'
    ];

    public function Users(){
        return $this->hasMany(User::class);
    }
}
