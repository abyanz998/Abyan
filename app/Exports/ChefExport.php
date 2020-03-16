<?php

namespace App\Exports;

use App\Chef;
use Maatwebsite\Excel\Concerns\FromCollection;

class ChefExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Chef::all();
    }
}
