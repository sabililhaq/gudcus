<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id', 'custom_id', 'request', 'notes', 'status', 'delivery_status', 'file_path'
    ];
}
