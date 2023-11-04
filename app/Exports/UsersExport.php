<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromQuery;
use App\Models\User;
class UsersExport implements FromQuery
{
    private $year;
    public function foryear($year)
    {
        $this->year = $year;
        return $this;
    }
    use Exportable;
    /**
    * @return \Illuminate\Database\Query\Builder
    */
    public function query()
    {
        return User::query()->where('idArea','=',$this->year);
    }
}
