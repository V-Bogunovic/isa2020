<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pharmacist extends Model
{
    use HasFactory;

    /**
     * Get the pharmacist's user.
     */
    public function user()
    {
        return $this->morphOne(User::class, 'roleable');
    }
}
