<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imovel extends Model
{
    protected $fillable = ['nome','tipo','telefone','endereco','valor','descricao','ngaragem','nquartos','nbanheiros','foto','locador_id'];
    function locador()
    {
        return $this->belongsTo('App\Locador');
    }
    public function favorito(){
        return $this->hasMany(Favorito::class);
     }
}
