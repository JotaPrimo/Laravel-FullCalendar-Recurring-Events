<?php

namespace App\Services;

use Carbon\Carbon;

class DataService
{
    public static function formatarDataDMY($suaData)
    {
        return  Carbon::parse($suaData)->format('d/m/Y');
    }

    public static function formatarDataDMYDois($suaData)
    {
        return  Carbon::parse($suaData)->format('Y-m-d');
    }

    public static function formatarDataHMSDois($suaData)
    {
        return  Carbon::parse($suaData)->format('H:m:s');
    }

    public static function formatarDataDMYHMS($suaData)
    {
        $data = Carbon::parse($suaData)->format('d/m/Y');
        $hora = Carbon::parse($suaData)->format('H:m:s');

        return  $data .' ás '. $hora;
    }

}
