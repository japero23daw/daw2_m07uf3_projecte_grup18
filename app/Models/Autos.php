<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Autos extends Model
{
    use HasFactory;
    protected $primaryKey = 'Matricula_auto';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = [
        'Matricula_auto',
        'Numero_bastidor',
        'Marca',
        'Model',
        'Color',
        'Numero_places',
        'Numero_portes',
        'Tipus_combustible',
    ];
}