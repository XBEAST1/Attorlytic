<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class profiledatasend extends Model
{
    use HasFactory;

    protected $table = 'form_data';

    // Inside User model
    public function profile_data_send()
    {
        return $this->hasOne(ProfileDataSend::class);
    }
}
