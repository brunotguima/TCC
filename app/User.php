<?php

namespace WhyBuy;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'cpf', 'rg', 'dataNasc', 'sexo', 'telUm', 'telDois', 'nomeEstab', 'cnpj', 'ei', 'endereco', 'cep', 'cidade', 'estado', 'ramoAtiv', 'nomeFantasia'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
