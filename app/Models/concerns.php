<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class concerns extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'num', 'mail', 'subject', 'message'
    ];
}
