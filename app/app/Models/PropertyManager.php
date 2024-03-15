<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyManager extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'current_date',
        'who',
        'hoa',
        'address',
        'city',
        'state',
        'zip',
        'address2',
        'city2',
        'state2',
        'zip2',
        'name',
        'email',
        'subject',
        'message',
    ];
}
