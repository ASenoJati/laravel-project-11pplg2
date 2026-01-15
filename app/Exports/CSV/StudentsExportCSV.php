<?php

namespace App\Exports\CSV;

use App\Models\Student;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithCustomCsvSettings;

class StudentsExportCSV implements
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
        return Student::all();
    }

    public function headings(): array
    {
        return [
            'No',
            'Nama Lengkap',
            'Tanggal Lahir',
            'Jenis Kelamin',
            'Kelas',
            'Email',
            'Alamat'
        ];
    }

    public function map($student): array
    {
        return [
            $student->id,
            $student->name,
            $student->birthday,
            $student->gender,
            $student->classroom->name,
            $student->email,
            $student->address,
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
