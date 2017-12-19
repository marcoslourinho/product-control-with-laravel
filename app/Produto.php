<?php

namespace market;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    public $timestamps = false;
    protected $fillable = array('nome', 'descricao', 'valor', 'quantidade');
}
