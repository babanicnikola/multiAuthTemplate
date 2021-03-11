<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
    protected $fillable = [
        'name', 'slug', 'vehicle', 'season', 'on_sale', 'price', 'width', 'height', 'radius', 'speed_index', 'weight', 'load', 'manufacturer', 'design', 'special_label', 'ean', 'country', 'image_src'
    ];
    use HasFactory;
}
