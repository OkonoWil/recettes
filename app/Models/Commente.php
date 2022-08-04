<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commente extends Model
{
    use HasFactory;

    public function recette()
    {
        return $this->belongsTo(Recette::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
