<?php

namespace App\Exports\CSV;

use App\Models\Teacher;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithCustomCsvSettings;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class TeachersExportCSV implements
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
        return Teacher::all();
    }

    public function headings(): array
    {
        return [
            'No',
            'Nama Lengkap',
            'Email',
            'Subject',
            'Alamat',
            'Phone'
        ];
    }

    public function map($teacher): array
    {
        return [
            $teacher->id,
            $teacher->name,
            $teacher->email,
            $teacher->subject->name,
            $teacher->address,
            $teacher->phone
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
