<?php

namespace App\Exports;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
class TareasExports implements FromView
{
    /**
    * @return \Illuminate\Database\Query\Builder
    */
    public function view(): View
    {
        return view ('');
    }
    public function query()
    {
        //
    }
}
