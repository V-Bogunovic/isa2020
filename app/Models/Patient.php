<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    /**
     * Get the post's image.
     */
    public function user()
    {
        return $this->morphOne(User::class, 'roleable');
    }
}
