<?php

namespace App\Exports\CSV;

use App\Models\Guardian;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithCustomCsvSettings;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class GuardiansExportCSV implements
    FromCollection,
    WithHeadings,
    WithMapping,
    WithCustomCsvSettings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Guardian::all();
    }

    public function headings(): array
    {
        return [
            'No',
            'Nama Lengkap',
            'Email',
            'Pekerjaan',
            'Phone'
        ];
    }

    public function map($guardian): array
    {
        return [
            $guardian->id,
            $guardian->name,
            $guardian->email,
            $guardian->job,
            $guardian->phone,
        ];
    }

    public function getCsvSettings(): array
    {
        return [
            'delimiter' => ',',
            'enclosure' => '"',
            'line_ending' => "\n",
            'use_bom' => true,
        ];
    }
}
