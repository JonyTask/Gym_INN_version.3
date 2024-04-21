<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'user_id',
        'gym_id',
        'display_name',
        'image_path',
        'age',
        'occupation',
        'description'
    ];
}
