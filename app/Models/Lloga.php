<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lloga extends Model
{
    use HasFactory;
    protected $primaryKey = ['Dni_client', 'Matricula_auto'];
    public $incrementing = false;
    protected$fillable = [
        'Dni_client',
        'Matricula_auto',
        'Data_prestec',
        'Data_devolucio',
        'Preu_dia',
        'Prestec_deposit_ple',
        'Tipus_dassegurança'

    ];
}
