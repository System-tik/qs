<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produit extends Model
{
    use HasFactory;

    protected $fillable=[
        'cat_id',
        'nom',
        'prix',
        'descrip',
        'type',
        'poids',
        'unite'
    ];
}
