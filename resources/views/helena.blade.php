<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HELENA</title>
</head>
<body>
    <h1>HELENA PAGE</h1>
    <table border="1">
        <tr>
            <th>No.</th>
            <th>Instansi</th>
            <th>Terlayani</th>
            <th>Indeks Pengunjung MPP Cimahi (%)</th>
            <th>Jumlah Responden SKPM</th>
            <th>Indeks Responden SKPM (%)</th>
            <th>Nilai SKM</th>
            <th>Nilai Indeks SKM (%)</th>
        </tr>
        @foreach ($hitung as $item)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $item->instansi }}</td>
            <td>{{ $item->terlayani }}</td>
            <td>{{ round((100 * $item->terlayani) / $totalTerlayani, 2) }}</td>
            <td>{{ $item->jumlah_responden }}</td>
            <td>{{ round((100 * $item->terlayani) / $totalTerlayani, 2) }}</td>
            <td>{{ $item->nilai_skm }}</td>
            <td>{{ round((100 * $item->terlayani) / $totalTerlayani, 2) }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>