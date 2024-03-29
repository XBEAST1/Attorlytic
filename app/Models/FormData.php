<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormData extends Model
{
    use HasFactory;

    protected $table = 'form_data';

    protected $fillable = [
        'firstname',
        'lastname',
        'description',
        'gender',
        'fee',
        'category',
        'country',
        'city',
        'educationinfo',
        'additionalinfo',
        'specializeinfo',
        'about',
        'image',
    ];
}
