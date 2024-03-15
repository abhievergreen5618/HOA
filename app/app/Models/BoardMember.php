<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BoardMember extends Model
{
    use HasFactory;

    protected $fillable = [
        'community_id',
        'board_member',
        'position_held',
        'property_manager',
        'address',
        'city',
        'state',
        'zip',
        'phone',
    ];

    public function community()
    {
        return $this->belongsTo(Community::class, 'id', 'id'); // Adjust the foreign key relationships
    }
}
