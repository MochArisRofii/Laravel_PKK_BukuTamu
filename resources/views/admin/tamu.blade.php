@extends('admin.app')

@section('content')
    <div class="container mx-auto px-4 py-6">
        <h2 class="text-center text-2xl font-semibold mb-4">Data Tamu</h2>
        <hr class="mb-6">
        <!-- Table -->
        <table class="min-w-full bg-white border border-gray-300 shadow-md rounded-lg">
            <thead class="bg-gray-100 text-gray-700">
                <tr>
                    <th class="py-2 px-4 text-left">No</th>
                    <th class="py-2 px-4 text-left">No KTP</th>
                    <th class="py-2 px-4 text-left">No HP</th>
                    <th class="py-2 px-4 text-left">Nama</th>
                    <th class="py-2 px-4 text-left">Alamat</th>
                    <th class="py-2 px-4 text-left">Keperluan</th>
                    <th class="py-2 px-4 text-left">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tamus as $data)
                    <tr class="border-b">
                        <td class="py-2 px-4">{{ $loop->iteration }}</td>
                        <td class="py-2 px-4">{{ $data->noktp }}</td>
                        <td class="py-2 px-4">{{ $data->nohp }}</td>
                        <td class="py-2 px-4">{{ $data->nama }}</td>
                        <td class="py-2 px-4">{{ $data->alamat }}</td>
                        <td class="py-2 px-4">{{ $data->keperluan }}</td>
                        <td class="py-2 px-4">
                            <!-- Action Buttons (Edit and Delete) -->
                            <a href="{{ route('admin.edit', $data->id) }}" class="text-blue-500 hover:text-blue-700 mr-3">Edit</a>
                            <form action="{{ route('admin.destroy', $data->id ?? '') }}" method="POST" class="inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500 hover:text-red-700">Hapus</button>
                            </form>
                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
