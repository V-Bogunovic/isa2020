<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SystemAdmin extends Model
{
    use HasFactory;

    /**
     * Get the system admin's user.
     */
    public function user()
    {
        return $this->morphOne(User::class, 'roleable');
    }
}
