@extends('admin.app')

@section('content')
    <div class="container mx-auto px-4 py-6">
        <h2 class="text-center text-2xl font-semibold mb-4">Edit Data Tamu</h2>
        <hr class="mb-6">

        <!-- Form untuk Edit Data Tamu -->
        <form action="{{ route('admin.update', $tamus->id) }}" method="POST">
            @csrf
            @method('PUT') <!-- Menggunakan method PUT untuk pembaruan -->

            <!-- Input untuk No KTP (readonly) -->
            <div class="mb-4">
                <label for="noktp" class="block">No KTP</label>
                <input type="text" name="noktp" id="noktp" value="{{ old('noktp', $tamus->noktp) }}" class="w-full px-3 py-2 border border-gray-300 rounded bg-gray-200 text-gray-600 cursor-not-allowed" readonly>
            </div>

            <!-- Input untuk No HP -->
            <div class="mb-4">
                <label for="nohp" class="block">No HP</label>
                <input type="text" name="nohp" id="nohp" value="{{ old('nohp', $tamus->nohp) }}" class="w-full px-3 py-2 border border-gray-300 rounded" required>
            </div>

            <!-- Input untuk Nama -->
            <div class="mb-4">
                <label for="nama" class="block">Nama</label>
                <input type="text" name="nama" id="nama" value="{{ old('nama', $tamus->nama) }}" class="w-full px-3 py-2 border border-gray-300 rounded" required>
            </div>

            <!-- Textarea untuk Alamat -->
            <div class="mb-4">
                <label for="alamat" class="block">Alamat</label>
                <textarea name="alamat" id="alamat" class="w-full px-3 py-2 border border-gray-300 rounded" required>{{ old('alamat', $tamus->alamat) }}</textarea>
            </div>

            <!-- Tombol Submit -->
            <div class="flex justify-end">
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">Update Data</button>
            </div>
        </form>
    </div>
@endsection
