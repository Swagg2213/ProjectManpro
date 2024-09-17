@extends('base.base')

@section('content')
<div class="container m-auto">
        <h1 class="text-center font-bold mt-10 text-4xl">LAYANAN DIAKONIA</h1>
    </div>

    <div class="container my-4 mx-auto grid grid-cols-1 gap-4 md:grid-cols-2">
        <div class="bg-white dark:bg-slate-800 rounded-lg px-6 py-8 ring-1 ring-slate-900/5 shadow-xl">
            <h1 class="text-slate-900 dark:text-white mt-5 text-base font-large tracking-tight">Layanan Penghiburan</h1>
            <h3 class="text-slate-900 dark:text-white mt-5 text-base font-medium tracking-tight">Layanan Penghiburan</h3>
        
            <p class="text-slate-500 dark:text-slate-400 mt-2 text-sm">
                intinya buat org klo mau mati ygy 
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Harum repellendus inventore sit rerum quisquam blanditiis quaerat sed id? Fuga, officiis.
            </p>
        
            <div class="mt-10 flex items-center justify-center">
                <a href="/kematian" class="rounded-md bg-indigo-500 px-3 py-3 text-sm font-semibold text-white">klik disini!
                </a>
            </div>
        </div>

        <div class="bg-white dark:bg-slate-800 rounded-lg px-6 py-8 ring-1 ring-slate-900/5 shadow-xl">
            <h1 class="text-slate-900 dark:text-white mt-5 text-base font-large tracking-tight">Layanan Pernikahan</h1>
            <h3 class="text-slate-900 dark:text-white mt-5 text-base font-medium tracking-tight">Layanan Pernikahan</h3>
        
            <p class="text-slate-500 dark:text-slate-400 mt-2 text-sm">
                KALO MAU NIKAH DISINI GES
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Harum repellendus inventore sit rerum quisquam blanditiis quaerat sed id? Fuga, officiis.
            </p>
        
            <div class="mt-10 flex items-center justify-center">
                <a href="/pernikahan" class="rounded-md bg-indigo-500 px-3 py-3 text-sm font-semibold text-white">klik disini!
                </a>
            </div>
        </div>
    </div>

@endsection
