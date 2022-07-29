<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recette extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image',
        'categorie_id',
        'other_categorie',
        'ingredients',
        'preparation',
    ];

    public function categorie()
    {
        return $this->belongsTo(Categorie::class);
    }


    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
