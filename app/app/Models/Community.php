<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Community extends Model
{
    use HasFactory;

    protected $fillable = [
        'county',
        'community',
        'hoa_or_non',
        'status_type',
        'community_type',
        'community_legal_name',
        'also_known',
        'date',
        'id_number',
    ];
}
