<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    use HasFactory;
    use HasFactory;
    protected $fillable = [
        'firstname',
        'lastname',
        'email',
        'password',
        'dob',
        'phone',
        'status',
        'role',
        'image',
    ];
}
