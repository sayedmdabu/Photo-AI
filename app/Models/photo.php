<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class photo extends Model
{
    use HasFactory;

    protected $table="photos";

    protected $fillable = [
        'user_id',
        'serial_number',
        'photo',
    ];
}
