<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    use HasFactory;

 
    protected $fillable = [
        'songname', 'genre', 'author', 'date_registered', 'image','audio',
        'file_path'
    ];

    
    


  
}

