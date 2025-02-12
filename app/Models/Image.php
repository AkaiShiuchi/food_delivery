<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Image extends Model
{
    use HasFactory;

    protected $table = 'image';
    protected $fillable = [
        'url',
        'target_type',
        'target_id',
    ];
    public $timestamps = true;
}
