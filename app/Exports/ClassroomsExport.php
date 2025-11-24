<?php

namespace App\Exports;

use App\Models\Classroom;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Events\AfterSheet;
use PhpOffice\PhpSpreadsheet\Style\Border;
use PhpOffice\PhpSpreadsheet\Style\Fill;

class ClassroomsExport implements
    FromCollection,
    WithHeadings,
    WithMapping,
    WithEvents,
    ShouldAutoSize
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

    public function registerEvents(): array
    {
        return [
            AfterSheet::class => function (AfterSheet $event) {
                $dataCount = Classroom::count(); // jumlah baris data
                $lastRow = $dataCount + 1;
                $lastColumn = 'C';             // sesuaikan jumlah 
                $header    = "A1:{$lastColumn}1";

                $cellRange = "A1:{$lastColumn}{$lastRow}";

                $event->sheet->getStyle($cellRange)->applyFromArray([
                    'borders' => [
                        'allBorders' => [
                            'borderStyle' => Border::BORDER_THIN,
                        ],
                    ],
                ]);

                $event->sheet->getStyle($header)->applyFromArray([
                    'font' => [
                        'bold' => true,
                        'color' => ['rgb' => 'FFFFFF']
                    ],
                    'fill' => [
                        'fillType' => Fill::FILL_SOLID,
                        'color' => ['rgb' => '4F81BD']
                    ],
                ]);
            }
        ];
    }
}
