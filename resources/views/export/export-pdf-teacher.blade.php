<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Data Teachers</title>
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

    <h2>TEACHERS DATA</h2>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Lengkap</th>
                <th>Email</th>
                <th>Subject</th>
                <th>Alamat</th>
                <th>Phone</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($teachers as $teacher)
            <tr>
                <td style="text-align: center;">{{ $loop->iteration }}</td>
                <td>{{ $teacher->name }}</td>
                <td style="text-align: center;">{{ $teacher->email }}</td>
                <td style="text-align: center;">{{ $teacher->subject->name }}</td>
                <td style="text-align: center;">{{ $teacher->address }}</td>
                <td>{{ $teacher->phone }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>

</html>