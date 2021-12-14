<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Custom extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'name', 'description', 'category', 'city', 'base_price', 'estimated_time', 'stock', 'file_path'
    ];
}
