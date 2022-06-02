<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Learning_Subject extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'sks'
    ];
}
