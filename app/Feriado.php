<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feriado extends Model
{
    protected $fillable = [
        'nome',
        'data',
        'updated_at',
        'deleted_at',
    ];

    public static function getFeriadosDepoisDeHoje() {
       return Feriado::whereDate('data', '>', now()->format('Y-m-d'))
        ->pluck('data', 'id')->toArray();

       // dd($data);
        // dd(array_flip($data));

    }

}
