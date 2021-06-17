<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

class movieGenre extends Pivot
{
    use HasFactory;

    protected $fillable = ['movie_id', 'genre_id'];
    protected $table = 'movie_genre';

    public function movie(){
        return $this->belongsTo(movie::class);
        //retorna o filme relacionado a esse pivot (1:n)
    }

    public function genre(){
        return $this->belongsTO(genre::class);
        //retorna o gênero relacionado a esse pivot (1:n)
    }

}
