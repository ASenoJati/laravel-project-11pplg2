<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Data Subjects</title>
    <style>
        body {
            font-family: DejaVu Sans, sans-serif;
            font-size: 12px;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            border: 1px solid #000;
            padding: 8px;
        }

        th {
            background: #2c3e50;
            color: white;
            text-align: center;
        }

        td {
            vertical-align: middle;
        }
    </style>
</head>

<body>

    <h2>SUBJECTS DATA</h2>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Deskripsi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($classrooms as $classroom)
            <tr>
                <td style="text-align: center;">{{ $loop->iteration }}</td>
                <td>{{ $classroom->name }}</td>
                <td style="text-align: center;">{{ $classroom->students_count }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>

</html>