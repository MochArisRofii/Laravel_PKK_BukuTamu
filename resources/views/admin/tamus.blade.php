<!DOCTYPE html>
<html>

<head>
    <title>Daftar Tamu (Admin)</title>
</head>

<body>
    <h1>Daftar Tamu (Admin)</h1>
    <table border="1">
        <tr>
            <th>No KTP</th>
            <th>No HP</th>
            <th>Nama</th>
            <th>Alamat</th>
        </tr>
        @foreach ($tamus as $tamu)
            <tr>
                <td>{{ $tamu->noktp }}</td>
                <td>{{ $tamu->nohp }}</td>
                <td>{{ $tamu->nama }}</td>
                <td>{{ $tamu->alamat }}</td>
            </tr>
        @endforeach
    </table>
</body>

</html>
