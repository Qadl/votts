<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keyv extends Model
{
    use HasFactory;
    protected $fillable = [
        'fName',
        'lName',
        'secretv',
        'user_id',
    ];
}
