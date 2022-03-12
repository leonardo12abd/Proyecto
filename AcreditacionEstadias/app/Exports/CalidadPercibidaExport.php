<?php

namespace App\Exports;

use App\Models\Calidadpercibidadata;
use Maatwebsite\Excel\Concerns\FromCollection;

class CalidadPercibidaExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Calidadpercibidadata::all();
    }
}
