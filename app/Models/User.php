<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laratrust\Traits\LaratrustUserTrait;
use App\Traits\LockableTrait;

class User extends Authenticatable
{
    use LaratrustUserTrait;
    use HasFactory, Notifiable;
    use Notifiable;
    use LockableTrait;


    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_name',
        'first_name',
        'last_name',
        'email',
        'job_title',
        'address_one',
        'address_two',
        'city',
        'postal_code',
        'phone_number',
        'password',
        'department_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function registered_devices(){
        return $this->hasMany(registered_devices::class);
    }
    
    public function invoices(){
        return $this->hasMany(invoices::class);
    }

    public function Department(){
        return $this->belongsTo(Department::class);
    }

    public function usersDetails(){
        return $this->hasOne(usersDetails::class);
    }
}
