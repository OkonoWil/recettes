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
        'user_id',
        'categorie_id',
        'other_categorie',
        'ingredients',
        'preparation',
        'duree'
    ];

    public function categorie()
    {
        return $this->belongsTo(Categorie::class);
    }


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function commentes()
    {
        return $this->hasMany(Commente::class);
    }
}
