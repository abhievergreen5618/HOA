<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserHOA extends Model
{
    use HasFactory;

    protected $fillable = [
        'hoa_name',
        'contact_person',
        'email',
        'phone',
        'city',
        'state',
        'zip',
        'comments',
        'photos',
    ];

    protected $casts = [
        'photos' => 'array',
    ];
}
