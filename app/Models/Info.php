<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
    use HasFactory;
    protected $fillable = [
        'fName',
        'lName',
        'age',
        'nick',
        'user_id',
        'mNumber',
        'image',

    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
