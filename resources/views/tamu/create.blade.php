<!DOCTYPE html>
<html>

<head>
    <title>Form Data Tamu</title>
</head>

<body>
    <h1>Form Data Tamu</h1>

    <!-- Menggunakan route untuk form action -->
    <form action="{{ route('tamu.store') }}" method="POST">
        @csrf

        <label for="noktp">No KTP:</label>
        <input type="text" id="noktp" name="noktp" required>
        <br>

        <label for="nohp">No HP:</label>
        <input type="number" id="nohp" name="nohp" required>
        <br>

        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" required>
        <br>

        <label for="alamat">Alamat:</label>
        <textarea id="alamat" name="alamat" required></textarea>
        <br>

        <button type="submit">Simpan</button>
    </form>

</body>

</html>
