<?php

namespace App\Exports\CSV;

use App\Models\Subject;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithCustomCsvSettings;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class SubjectsExportCSV  implements
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
        return Subject::all();
    }

    public function headings(): array
    {
        return [
            'No',
            'Nama',
            'Deskripsi'
        ];
    }

    public function map($subject): array
    {
        return [
            $subject->id,
            $subject->name,
            $subject->description,
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
