<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PharmacyAdmin extends Model
{
    use HasFactory;

    /**
     * Get the pharmacy admin's user.
     */
    public function user()
    {
        return $this->morphOne(User::class, 'roleable');
    }
}
