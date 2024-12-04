<?php

namespace App\Exports;

use App\Models\CampanaProveedorNew;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class CampanaProveedorExport implements FromCollection, WithHeadings
{
    protected $campanas;

    public function __construct(Collection $campanas)
    {
        $this->campanas = $campanas->flatten();;
    }

    public function collection()
    {
        return $this->campanas->map(function ($campana) {
            return [
                'LOCAL' => $campana->cdg_local,
                'NOMBRE SALA' => $campana->nombre_sap,
                'ELEMENTO' => $campana->elemento,
                'FECHA INICIO' => $campana->desde,
                'FECHA TERMINO' => $campana->hasta,
            ];
        });
    }

    public function headings(): array
    {
        return [
            'LOCAL',
            'NOMBRE SALA',
            'ELEMENTO',
            'FECHA INICIO',
            'FECHA TERMINO',
        ];
    }
}
