<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fournisseur extends Model
{
    use HasFactory;

    protected $fillable = ['nom','tel','adresse','marchandises'];
    protected $casts = ['marchandises'=>'array'];
}
