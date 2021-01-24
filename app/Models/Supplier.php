<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;

    /**
     * Get the sipplier's user.
     */
    public function user()
    {
        return $this->morphOne(User::class, 'roleable');
    }
}
