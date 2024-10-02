<div class="fixed navbar bg-[#125098] shadow-lg md:py-1 z-50">
    <div class="navbar-start">
        <div class="dropdown">
            <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                    <path class="stroke-current text-white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" />
                </svg>
            </div>
            <ul tabindex="0"
                class="menu menu-sm dropdown-content bg-base-100 rounded-box z-[1] mt-3 w-52 p-2 shadow">
                <li><a href="/" class="rounded-md hover:bg-[#113257]">Home</a></li>
                <li><a href="/informasi" class="rounded-md hover:bg-[#113257]">Informasi</a></li>
                <li><a href="/renungan" class="rounded-md hover:bg-[#113257]">Renungan</a></li>
                <li><a href="/diakonia" class="rounded-md hover:bg-[#113257]">Diakonia</a></li>
                <li><a href="/login" class="rounded-md hover:bg-[#113257]">Login</a></li>
            </ul>
        </div>
        <div class="w-16 ml-3 md:w-20 md:ml-10 text-lg font-bold text-white">
            MAHANAIM
        </div>
        <!-- <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSHauxvjjiHK7rw5dudnadlQM2uUFZrus-WfQ&s" alt="" class="w-16 ml-3 md:w-20 md:ml-10"> -->
    </div>
        <div class="navbar-center hidden lg:flex absolute inset-x-0 justify-center text-sm font-semibold text-white">
            <ul class="menu menu-horizontal space-x-1">
                <li><a href="/" class="rounded-md hover:bg-[#113257] py-2">Home</a></li>
                <li><a href="/informasi" class="rounded-md hover:bg-[#113257] py-2">Informasi</a></li>
                <li><a href="/renungan" class="rounded-md hover:bg-[#113257] py-2">Renungan</a></li>
                <li><a href="/diakonia" class="rounded-md hover:bg-[#113257] py-2">Diakonia</a></li>
                <li><a href="/login" class="rounded-md hover:bg-[#113257] py-2">Login</a></li>
            </ul>
        </div>
    
    <div class="navbar-end md:mr-10">
        <label class="flex cursor-pointer gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                class="stroke-current text-white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="12" cy="12" r="5" />
                <path d="M12 1v2M12 21v2M4.2 4.2l1.4 1.4M18.4 18.4l1.4 1.4M1 12h2M21 12h2M4.2 19.8l1.4-1.4M18.4 5.6l1.4-1.4" />
            </svg>
            <input id='theme-toggle' type="checkbox" value="synthwave" class="toggle theme-controller w-10 h-5" />
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                    class="stroke-current text-white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path>
            </svg>
        </label>
    </div>
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