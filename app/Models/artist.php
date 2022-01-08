<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class artist extends Model
{
    use HasFactory;

    protected $fillable = [
        'artistname', 'realname', 'number', 'genre', 'mail','dateregistered','nationality','address','image',
        'file_path'
    ];

}

