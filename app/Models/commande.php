<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class commande extends Model
{
    use HasFactory;
    
    protected $fillable=['id_pan','datec','etatcom','adresse','etatliv','tel','dateliv','id_lieu'];
    
}
