<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class settings extends Model
{
    use HasFactory;

    protected $fillable = [
        'mobile_username',
        'mobile_password',
        'mobile_senderNumber',
        'invoice_sms',
        'admin_email',
        'admin_mobilenumber',
        'logo_address',
        'company_name',
        'compny_address'
    ];
}
