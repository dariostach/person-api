<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;
    protected $table = 'persons';
    protected $fillable = [ // se crea este atributo para poder guardar y matchear con el constructor del Store.
        'firstName', 'lastName', 'country',
         'city', 'street', 'number', 'single', 'documentNumber'
    ];
    protected $hidden = [ // campos a ocultar cuando se hace el get 
        'created_at', 'updated_at'
    ];
}
