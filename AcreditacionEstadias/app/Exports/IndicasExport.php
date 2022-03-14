<?php

namespace App\Exports;

use App\Models\Indicadata;
use Maatwebsite\Excel\Concerns\FromCollection;

class IndicasExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Indicadata::all();
    }
}
