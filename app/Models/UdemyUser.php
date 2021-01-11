<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UdemyUser extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'user_name',
        'email_adress',
        'phone_number',
    ];
}
