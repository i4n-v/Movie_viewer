<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class movie extends Model
{
    use HasFactory;

    //diz para o model os atributos que são preenchiveis da tabela do banco de dados.
    protected $fillable = ['name', 'author', 'year', 'duration', 'description']; 

    public function viewers() {
        return $this->belongsTo(User::class, 'user_id'); 
        //retorna os usuários que cadastraram o filme, ou seja, relacionamento um pra muitos reverso
    }

}
