<?php

namespace App\Exports\CSV;

use App\Models\Classroom;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithCustomCsvSettings;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class ClassroomsExportCSV implements
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
        return Classroom::withCount('students')->get();
    }

    public function headings(): array
    {
        return [
            'No',
            'Nama Kelas',
            'Jumlah Siswa',
        ];
    }

    public function map($classroom): array
    {
        return [
            $classroom->id,
            $classroom->name,
            $classroom->students_count
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
