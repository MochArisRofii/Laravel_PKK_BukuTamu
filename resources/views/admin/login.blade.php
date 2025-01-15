<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <title>Admin Buku Tamu</title>
</head>

<body class="bg-gray-100">
    <div class="flex items-center justify-center min-h-screen">
        <div class="w-full max-w-md p-8 bg-white rounded-lg shadow-lg">
            <div class="text-center mb-6">
                <h2 class="text-3xl font-bold text-red-600">Login Buku Tamu</h2>
            </div>

            <!-- Form Login -->
            <form method="POST" action="{{ route('admin.authenticate') }}">
                @csrf <!-- Token CSRF untuk keamanan -->

                <!-- Username Field -->
                <div class="mb-4">
                    <label for="user" class="block text-gray-700 font-semibold">Username</label>
                    <div class="mt-2 relative">
                        <input type="text" id="user" name="username" 
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                            placeholder="Masukkan Username" value="{{ old('username') }}">
                        <span class="absolute left-3 top-2 text-gray-500"><i class="fas fa-user"></i></span>
                    </div>
                    <!-- Menampilkan pesan error jika ada -->
                    @error('username')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Password Field -->
                <div class="mb-6">
                    <label for="pass" class="block text-gray-700 font-semibold">Password</label>
                    <div class="mt-2 relative">
                        <input type="password" id="pass" name="password"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                            placeholder="Masukkan Password">
                        <span class="absolute left-3 top-2 text-gray-500"><i class="fas fa-lock"></i></span>
                    </div>
                    <!-- Menampilkan pesan error jika ada -->
                    @error('password')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Submit Button -->
                <button type="submit" class="w-full py-2 bg-green-500 text-white font-bold rounded-lg hover:bg-green-600 transition duration-300">
                    LOGIN!
                </button>

                <!-- Menampilkan pesan error jika login gagal -->
                @if(session('error'))
                    <div class="mt-4 text-red-500 text-center">
                        {{ session('error') }}
                    </div>
                @endif
            </form>
        </div>
    </div>

    <!-- Font Awesome for icons -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</body>

</html>
