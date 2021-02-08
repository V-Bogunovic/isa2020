<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Drug extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'code',
        'name',
        'type',
        'form',
        'composition',
        'manufacturer',
        'prescription',
        'additional_notes',
    ];

    /**
     * The substitutes for the drug.
     */
    public function substitutes()
    {
        return $this->belongsToMany(Drug::class, 'substitute_drugs', 'drug_id', 'substitute_id');
    }
}
