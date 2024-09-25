
<!DOCTYPE html>
<html lang="en" data-theme="lofi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GPPS Mahanaim Surabaya</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.6.0/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    {{-- @vite('resources/css/app.css') --}}
</head>

<body class="h-full">
    <!-- navbar -->
    <div class="navbar bg-red-900 shadow md:pt-5 sticky top-0 z-50">
        <div class="navbar-start">
            <div class="dropdown">
                <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h8m-8 6h16" />
                    </svg>
                </div>
                <ul tabindex="0"
                    class="menu menu-sm dropdown-content bg-base-100 rounded-box z-[1] mt-3 w-52 p-2 shadow">
                    <li><a href="/">Home</a></li>
                    <li><a href="/dataJemaat">Data Jemaat</a></li>
                    <li><a href="/renungan">Renungan</a></li>
                    <li><a href="/diakonia">Diakonia</a></li>
                    <li><a href="/login">Login</a></li>
                    <li><a href="/registrasi">Add Admin</a></li>
                </ul>
            </div>
            <img src="/logo.png" alt="" class="w-16 ml-3 md:w-20 md:ml-20">
        </div>
            <div class="navbar-center hidden lg:flex text-lg text-white">
                <ul class="menu menu-horizontal px-1">
                    <li><a href="/">Home</a></li>
                    <li><a href="/jemaat">Data Jemaat</a></li>
                    <li><a href="/informasi">Informasi</a></li>
                    <li><a href="/renungan">Renungan</a></li>
                    <li><a href="/diakonia">Diakonia</a></li>
                    <li><a href="/login">Login</a></li>
                    <li><a href="/registrasi">Add Admin</a></li>
                </ul>
            </div>
    
        <div class="navbar-end">
            <label class="flex cursor-pointer gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="12" cy="12" r="5" />
                    <path
                        d="M12 1v2M12 21v2M4.2 4.2l1.4 1.4M18.4 18.4l1.4 1.4M1 12h2M21 12h2M4.2 19.8l1.4-1.4M18.4 5.6l1.4-1.4" />
                </svg>
                <input id='theme-toggle' type="checkbox" value="synthwave" class="toggle theme-controller" />
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path>
                </svg>
            </label>
        </div>
    </div>
   
    <div class="">
      @yield('content')
    </div>

    <script>
        // Mendapatkan elemen root <html>
        const rootElement = document.documentElement;

        // Mendapatkan toggle checkbox
        const themeToggle = document.getElementById('theme-toggle');

        // Cek apakah pengguna pernah memilih mode sebelumnya
        if (localStorage.getItem('theme') === 'black') {
            rootElement.setAttribute('data-theme', 'black');
            themeToggle.checked = true;
        }

        // Tambahkan event listener untuk toggle switch
        themeToggle.addEventListener('change', function() {
            if (themeToggle.checked) {
                rootElement.setAttribute('data-theme', 'black');
                localStorage.setItem('theme', 'black'); // Simpan pilihan mode di localStorage
            } else {
                rootElement.setAttribute('data-theme', 'lofi');
                localStorage.setItem('theme', 'lofi');
            }
        });
    </script>
</body>

</html>

