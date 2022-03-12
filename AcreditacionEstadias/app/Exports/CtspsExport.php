<?php

namespace App\Exports;

use App\Models\Ctspdata;
use Maatwebsite\Excel\Concerns\FromCollection;

class CtspsExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Ctspdata::all();
    }
}
