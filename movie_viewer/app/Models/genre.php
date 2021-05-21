<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class genre extends Model
{
    use HasFactory;

    protected $fillable = ['genre'];

    public function genresMovie() {
        return $this->hasMany(movie::class); 
        //retorna os filmes atrelados ao gênero 
    }
}
