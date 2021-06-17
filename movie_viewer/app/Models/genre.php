<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class genre extends Model
{
    use HasFactory;

    protected $fillable = ['genre'];

    public function movies() {
        //many to many relationship(class, pivot, id da tabela atual no pivot, id da segunda tabela no pivot)
        return $this->belongsToMany(movie::class, 'movie_genre', 'genre_id', 'movie_id')->using(movieGenre::class)->withPivot("id");
        //retorna os diversos filmes que tem um gênero (n:m)
    }

    //public function genresMovie() {
    //    return $this->hasMany(movie::class); 
        //retorna os filmes atrelados a um gênero (1:n)
    //}
}
