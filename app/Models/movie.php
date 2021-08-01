<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class movie extends Model
{
    use HasFactory;

    //diz para o model os atributos que são preenchiveis da tabela do banco de dados.
    protected $fillable = ['name', 'author', 'year', 'duration', 'description', 'user_id']; 

    public function viewers() {
        return $this->belongsTo(User::class, 'user_id'); 
        //retorna os usuários que cadastraram o filme, ou seja, relacionamento um pra muitos reverso
    }

    public function genres() {
        //many to many relationship(class, pivot, id da tabela atual no pivot, id da segunda tabela no pivot)
        return $this->belongsToMany(genre::class, 'movie_genre', 'movie_id', 'genre_id')->using(movieGenre::class)->withPivot("id"); //permite pegar o id do pivot nessa query
        //retorna os diversos gêneros de um livro (n:m)
    }

    //public function genre() {
    //    return $this->belongsTo(genre::class); 
        //retorna os gêneros relacionados a esse filme (1:n)
   // }
}
