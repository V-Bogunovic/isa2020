<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PharmacyAdmin extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'pharmacy_id'
    ];

    /**
     * Get the pharmacy admin's user.
     */
    public function user()
    {
        return $this->morphOne(User::class, 'roleable');
    }

    /**
     * Get the pharmacy that that pharmacy admin work at.
     */
    public function pharmacy()
    {
        return $this->belongsTo(Pharmacy::class);
    }
}
