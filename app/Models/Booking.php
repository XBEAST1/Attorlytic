<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    public function client()
    {
        return $this->belongsTo(User::class, 'client_id');
    }
    protected $table = 'booking';

    protected $fillable = [
        'lawyer_id',
        'client_id',
        'day', 
        'time',
    ];
}

