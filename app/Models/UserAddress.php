<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UserAddress extends Model
{
    use HasFactory;

    protected $table = 'user_address';
    protected $fillable = [
        'name',
        'lable_as',
        'country',
        'city',
        'district',
        'address_details',
        'lat',
        'long',
        'phone',
        'user_id',
    ];
    public $timestamps = true;

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
