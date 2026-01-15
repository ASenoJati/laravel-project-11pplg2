<?php

namespace App\Exports\Excel;

use App\Models\Student;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Events\AfterSheet;
use PhpOffice\PhpSpreadsheet\Style\Border;
use PhpOffice\PhpSpreadsheet\Style\Fill;

class StudentsExportExcel implements
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

    public function registerEvents(): array
    {
        return [
            AfterSheet::class => function (AfterSheet $event) {
                $dataCount = Student::count(); // jumlah baris data
                $lastRow = $dataCount + 1;
                $lastColumn = 'G';             // sesuaikan jumlah 
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
