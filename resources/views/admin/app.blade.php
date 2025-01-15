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
    <!-- Navbar -->
    <nav class="bg-blue-600 fixed w-full top-0 left-0 shadow-lg z-50">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
            <a class="text-white text-2xl font-semibold flex items-center" href="#">
                <i class="fas fa-book-open mr-3"></i>
                <span>SELAMAT DATANG ADMIN | <b>BUKU TAMU</b></span>
            </a>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="flex mt-24">
        <!-- Sidebar -->
        <div class="w-1/4 bg-gray-800 p-6 shadow-lg">
            <ul class="space-y-6">
                <li>
                    <a class="text-white text-lg hover:bg-blue-700 px-4 py-2 rounded-md transition duration-300"
                        href="{{ route('admin.dashboard') }}">
                        <i class="fas fa-home mr-3"></i>Home
                    </a>
                </li>
                <li>
                    <a class="text-white text-lg hover:bg-blue-700 px-4 py-2 rounded-md transition duration-300"
                        href="{{ route('admin.tamu') }}">
                        <i class="fas fa-users mr-3"></i>Data Tamu
                    </a>
                </li>
                <!-- Sidebar - Logout -->
                <li>
                    <form action="{{ route('admin.logout') }}" method="POST">
                        @csrf
                        <button type="submit"
                            class="text-white text-lg hover:bg-blue-700 px-4 py-2 rounded-md transition duration-300 w-full text-left">
                            <i class="fas fa-sign-out-alt mr-3"></i>Logout
                        </button>
                    </form>
                </li>
            </ul>
        </div>

        <!-- Content Area -->
        <div class="flex-1 p-6 bg-white shadow-lg rounded-lg m-6">
            
            <div class="space-y-6">
                @yield('content')
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- Font Awesome for icons -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/js/all.min.js"></script>
</body>

</html>
