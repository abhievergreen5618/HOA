<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Headings extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'hoa_found_heading',
        'hoa_not_found_heading',
        ];
}
