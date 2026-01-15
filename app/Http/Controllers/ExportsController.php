<?php

namespace App\Http\Controllers;

use App\Exports\CSV\ClassroomsExportCSV;
use App\Exports\CSV\GuardiansExportCSV;
use App\Exports\CSV\StudentsExportCSV;
use App\Exports\CSV\SubjectsExportCSV;
use App\Exports\CSV\TeachersExportCSV;
use App\Exports\Excel\ClassroomsExportExcel;
use App\Exports\Excel\GuardiansExportExcel;
use App\Exports\Excel\StudentsExportExcel;
use App\Exports\Excel\SubjectsExportExcel;
use App\Exports\Excel\TeachersExportExcel;
use App\Models\Classroom;
use App\Models\Guardian;
use Barryvdh\Snappy\Facades\SnappyPdf as PDF;
use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Maatwebsite\Excel\Excel as ExcelExcel;

class ExportsController extends Controller
{
    public function exportStudents($export)
    {
        if ($export == 'excel') {

            return Excel::download(new StudentsExportExcel, 'Students Data.xlsx');
        } elseif ($export == 'csv') {

            return Excel::download(
                new StudentsExportCSV,
                'students.csv',
                ExcelExcel::CSV
            );
        } elseif ($export == 'pdf') {

            $students = Student::all();

            $pdf = Pdf::loadView('export.export-pdf-student', compact('students'))
                ->setPaper('A4', 'portrait');

            return $pdf->download('data-siswa.pdf');
        } elseif ($export == 'print') {

            $students = Student::all();

            $pdf = PDF::loadView('export.export-pdf-student', compact('students'))
                ->setPaper('A4')
                ->setOrientation('portrait');

            return $pdf->inline('print-student.pdf');
        }
    }

    public function exportGuardians($export)
    {
        if ($export == 'excel') {
            return Excel::download(new GuardiansExportExcel, 'Guardians Data.xlsx');
        } elseif ($export == 'csv') {
            return Excel::download(
                new GuardiansExportCSV,
                'guardians.csv',
                ExcelExcel::CSV
            );
        } elseif ($export == 'pdf') {

            $guardians = Guardian::all();

            $pdf = Pdf::loadView('export.export-pdf-guardian', compact('guardians'))
                ->setPaper('A4', 'portrait');

            return $pdf->download('data-guardian.pdf');
        } elseif ($export == 'print') {

            $guardians = Guardian::all();

            $pdf = PDF::loadView('export.export-pdf-guardian', compact('guardians'))
                ->setPaper('A4')
                ->setOrientation('portrait');

            return $pdf->inline('print-guardian.pdf');
        }
    }

    public function exportClassrooms($export)
    {
        if ($export == 'excel') {

            return Excel::download(new ClassroomsExportExcel, 'Classrooms Data.xlsx');
        } elseif ($export == 'csv') {

            return Excel::download(
                new ClassroomsExportCSV,
                'Classrooms Data.csv',
                ExcelExcel::CSV
            );
        } elseif ($export == 'pdf') {

            $classrooms = Classroom::withCount('students')->get();

            $pdf = Pdf::loadView('export.export-pdf-classroom', compact('classrooms'))
                ->setPaper('A4', 'portrait');

            return $pdf->download('data-classroom.pdf');
        } elseif ($export == 'print') {

            $classrooms = Classroom::withCount('students')->get();

            $pdf = PDF::loadView('export.export-pdf-classroom', compact('classrooms'))
                ->setPaper('A4')
                ->setOrientation('portrait');

            return $pdf->inline('print-classroom.pdf');
        }
    }

    public function exportTeachers($export)
    {
        if ($export == 'excel') {
            return Excel::download(new TeachersExportExcel, 'Teachers Data.xlsx');
        } elseif ($export == 'csv') {
            return Excel::download(
                new TeachersExportCSV,
                'Teachers Data.csv',
                ExcelExcel::CSV
            );
        } elseif ($export == 'pdf') {


            $teachers = Teacher::all();

            $pdf = Pdf::loadView('export.export-pdf-teacher', compact('teachers'))
                ->setPaper('A4', 'portrait');

            return $pdf->download('data-teacher.pdf');
        } elseif ($export == 'print') {

            $teachers = Teacher::all();

            $pdf = PDF::loadView('export.export-pdf-teacher', compact('teachers'))
                ->setPaper('A4')
                ->setOrientation('portrait');

            return $pdf->inline('print-teacher.pdf');
        }
    }

    public function exportSubjects($export)
    {
        if ($export == 'excel') {
            return Excel::download(new SubjectsExportExcel, 'Subjects Data.xlsx');
        } elseif ($export == 'csv') {
            return Excel::download(
                new SubjectsExportCSV,
                'Subjects Data.csv',
                ExcelExcel::CSV
            );
        } elseif ($export == 'pdf') {
            return "ok pdf";
        } elseif ($export == 'print') {
            return "ok print";
        }
    }
}
