<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HOA extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'product_url',
        'product_url2',
        'product_url3',
        'product_url4',
        'address',
        'city',
        'state',
        'zip',
        'county',
        'contact_person',
        'phone',
        'email',
        'dealer_name',
    ];
}
