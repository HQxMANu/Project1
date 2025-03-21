<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    protected $fillable = [
        'property_title',
        'description',
        'number_of_rooms',
        'number_of_bathrooms',
        'price',
        'property_type',
        'location',
        'house_photo',
    ];
}
