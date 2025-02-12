<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Shipper extends Model
{
    use HasFactory;

    protected $table = 'shipper';
    protected $fillable = [
        'name',
        'phone',
        'image_url',
    ];
    public $timestamps = true;
}
