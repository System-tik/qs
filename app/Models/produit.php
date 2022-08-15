<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produit extends Model
{
    use HasFactory;

    protected $fillable=[
        'id_catp',
        'nom',
        'prix',
        'descrip',
        'type',
        'poids'];
}
