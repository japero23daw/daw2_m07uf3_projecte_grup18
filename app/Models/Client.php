<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $primaryKey = 'Dni_client';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = [
        'Dni_client',
        'Nom_i_cognoms',
        'Edat',
        'Telèfon',
        'Adreça',
        'Ciutat',
        'Email',
        'Número_del_permís_de_conducció',
        'Punts_del_permís_de_conducció',
        'Tipus_de_targeta',
        'Número_targeta'
    ];
}
