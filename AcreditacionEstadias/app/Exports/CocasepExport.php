<?php

namespace App\Exports;

use App\Models\Cocacepdata;
use Maatwebsite\Excel\Concerns\FromCollection;

class CocasepExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Cocacepdata::all();
    }
}
