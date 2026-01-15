<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Data Students</title>
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

    <h2>STUDENTS DATA</h2>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Lengkap</th>
                <th>Tanggal Lahir</th>
                <th>Jenis Kelamin</th>
                <th>Kelas</th>
                <th>Email</th>
                <th>Alamat</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
            <tr>
                <td style="text-align: center;">{{ $loop->iteration }}</td>
                <td>{{ $student->name }}</td>
                <td style="text-align: center;">{{ $student->birthday }}</td>
                <td style="text-align: center;">{{ $student->gender }}</td>
                <td style="text-align: center;">{{ $student->classroom->name }}</td>
                <td>{{ $student->email }}</td>
                <td>{{ $student->address }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>

</html>