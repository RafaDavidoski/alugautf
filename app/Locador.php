<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Locador extends Model
{
    use SoftDeletes;
    protected $fillable = ['nome','endereco','cpflocador','telefonelocador'];

    function imovels(){
        return $this-> hasMany('App\Imovel');
    }
}
