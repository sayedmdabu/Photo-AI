<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory;

    protected $table="photos";

    protected $fillable = [
        'order_id',
        'user_id',
        'serial_number',
        'photo',
    ];
}
