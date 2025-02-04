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
                    <th class="py-2 px-4 text-left">Username</th>
                    <th class="py-2 px-4 text-left">Nama</th>
                    <th class="py-2 px-4 text-left">No Hp</th>
                    <th class="py-2 px-4 text-left">Alamat</th>
                    <th class="py-2 px-4 text-left">Gender</th>
                    <th class="py-2 px-4 text-left">Tanggal Lahir</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($admins as $data)
                    <tr class="border-b">
                        <td class="py-2 px-4">{{ $loop->iteration }}</td>
                        <td class="py-2 px-4">{{ $data->username }}</td>
                        <td class="py-2 px-4">{{ $data->nama }}</td>
                        <td class="py-2 px-4">{{ $data->nohp }}</td>
                        <td class="py-2 px-4">{{ $data->alamat }}</td>
                        <td class="py-2 px-4">{{ $data->gender }}</td>
                        <td class="py-2 px-4">{{ $data->tgllahir }}</td>
                        

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
