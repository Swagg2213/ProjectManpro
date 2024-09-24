<!-- @extends('base.base') -->
<!-- @section('content') -->
<div class="container m-auto">
        <h1 class="text-center font-bold mt-10 text-4xl">LAYANAN DIAKONIA</h1>
        <br><br>
    </div>

    <div class="container px-20 mx-12 grid grid-cols-1 gap-12 md:grid-cols-3 flex-shrink: 1 text-center">
        <div class="bg-white dark:bg-slate-800 rounded-lg px-6 py-8 ring-1 ring-slate-900/5 shadow-xl w-80">
            <div class = "w-full">
                <img src="{{URL::asset('/images/death.jpg')}}">
            </div>

            <h3 class="text-slate-900 dark:text-white mt-5 text-base font-medium tracking-tight">Layanan Penghiburan</h3>
        
            <p class="text-slate-500 dark:text-slate-400 mt-2 text-sm">
                Kami ingin menyatakan kasih Tuhan pada setiap masa sulit yang Anda lalui. Apabila Anda memerlukan bantuan maupun pelayanan, klik tombol dibawah ini untuk mendapatkan informasi selanjutnya.
                <br><br>
            </p>
        
            <div class="mt-4 flex items-center justify-center">
                <a href="/kematian" class="rounded-md bg-indigo-500 px-3 py-3 text-sm font-semibold text-white">Selengkapnya</a>
            </div>
        </div>

        <div class="bg-white dark:bg-slate-800 rounded-lg px-6 py-8 ring-1 ring-slate-900/5 shadow-xl w-80">
            <div class = "w-full">
                <img src="{{URL::asset('/images/married.jpg')}}">
            </div>

            <h3 class="text-slate-900 dark:text-white mt-5 text-base font-medium tracking-tight">Layanan Pernikahan</h3>
        
            <p class="text-slate-500 dark:text-slate-400 mt-2 text-sm">
                Kami siap membantu Anda dalam mempersiapkan pernikahan kudus sebagai perwujudan kasih Tuhan. Klik tombol di bawah ini untuk mendapatkan bimbingan dan dukungan rohani dalam perjalanan menuju hari pernikahan Anda.
                <br><br>
            </p>
        
            <div class="mt-4 flex items-center justify-center">
                <a href="/pernikahan" class="rounded-md bg-indigo-500 px-3 py-3 text-sm font-semibold text-white">Selengkapnya</a>
            </div>
        </div>

        <div class="bg-white dark:bg-slate-800 rounded-lg px-6 py-8 ring-1 ring-slate-900/5 shadow-xl w-80">
            <div class = "w-full">
                <img src="{{URL::asset('/images/pray.jpg')}}">
            </div>

            <h3 class="text-slate-900 dark:text-white mt-5 text-base font-medium tracking-tight">Permohonan Pokok Doa</h3>
        
            <p class="text-slate-500 dark:text-slate-400 mt-2 text-sm">
                Jika Anda membutuhkan dukungan doa, Anda disarankan untuk dapat mengklik tombol di bawah ini agar dapat menghubungi pihak yang bersangkutan. Bersama-sama kita akan menaikkan doa ini dalam hadirat Tuhan.
                <br><br>
            </p>
        
            <div class="mt-4 flex items-center justify-center">
                <a href="https://www.whatsapp.com/" class="rounded-md bg-indigo-500 px-3 py-3 text-sm font-semibold text-white">Selengkapnya</a>
            </div>
        </div>
    </div>
<!-- 
@endsection -->