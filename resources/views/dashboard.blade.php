@extends('base.base')

@section('content')
<div class="dashboard">
    <div class="relative h-screen overflow-hidden">
        <video autoplay loop muted class="absolute inset-0 w-full h-full object-cover z-10">
            <source src="{{ asset('videos/vid-natal.mp4') }}" type="video/mp4">
        </video>
        <div class="absolute inset-0 bg-[#071525] opacity-70 z-20"></div>
        <div class="relative z-30 flex flex-col items-center justify-center h-full text-center">
            <h1 class="mt-10 font-bold text-4xl text-white">GPPS MAHANAIM DD-8</h1>
            <h2 class="mt-2 text-base font-semibold text-white">WE ARE FAMILY</h2>
            <img src="{{ asset('images/arrow-down.png') }}" alt="arrow-down" class="animate-bounce w-8 h-8 absolute bottom-7 left-1/2">
        </div>
    </div>

    <div class="tema-tahunan">
        <div class="headline relative overflow-hidden whitespace-nowrap py-5 bg-white text-[#125098]">
            <div class="flex animate-slide-left-infinite w-max">
                <p class="text-center font-bold text-2xl mx-2">Roma 8:29</p>
                <p class="text-center font-bold text-2xl mx-2">Sebab semua orang yang dipilih-Nya dari semula, mereka juga ditentukan-Nya dari semula untuk menjadi serupa dengan gambaran Anak-Nya, supaya Ia, Anak-Nya itu, menjadi yang sulung di antara banyak saudara.</p>
                <p class="text-center font-bold text-2xl mx-2">Roma 8:29</p>
                <p class="text-center font-bold text-2xl mx-2">Sebab semua orang yang dipilih-Nya dari semula, mereka juga ditentukan-Nya dari semula untuk menjadi serupa dengan gambaran Anak-Nya, supaya Ia, Anak-Nya itu, menjadi yang sulung di antara banyak saudara.</p>
                <p class="text-center font-bold text-2xl mx-2">Roma 8:29</p>
                <p class="text-center font-bold text-2xl mx-2">Sebab semua orang yang dipilih-Nya dari semula, mereka juga ditentukan-Nya dari semula untuk menjadi serupa dengan gambaran Anak-Nya, supaya Ia, Anak-Nya itu, menjadi yang sulung di antara banyak saudara.</p>
                <p class="text-center font-bold text-2xl mx-2">Roma 8:29</p>
                <p class="text-center font-bold text-2xl mx-2">Sebab semua orang yang dipilih-Nya dari semula, mereka juga ditentukan-Nya dari semula untuk menjadi serupa dengan gambaran Anak-Nya, supaya Ia, Anak-Nya itu, menjadi yang sulung di antara banyak saudara.</p>
                <p class="text-center font-bold text-2xl mx-2">Roma 8:29</p>
                <p class="text-center font-bold text-2xl mx-2">Sebab semua orang yang dipilih-Nya dari semula, mereka juga ditentukan-Nya dari semula untuk menjadi serupa dengan gambaran Anak-Nya, supaya Ia, Anak-Nya itu, menjadi yang sulung di antara banyak saudara.</p>
            </div>
        </div>
        <img src="{{ asset('images/imago-dei.png') }}" alt="Tema Tahunan Gereja" class="w-full h-auto">
    </div>

    <div class=pt-60>
        <h1 class="text-center font-semibold text-3xl">SEJARAH GEREJA</h1>
        <br><p class="text-center text-lg text-balance">GPPS Mahanaim adalah salah satu gereja lokal yang berada di bawah naungan sinode Gereja Pantekosta Pusat Surabaya (GPPS). Sebagai bagian dari gereja Pantekosta di Indonesia, GPPS Mahanaim memiliki akar sejarah yang erat dengan gerakan Pantekosta yang pertama kali masuk ke Indonesia pada awal abad ke-20. Gerakan ini dikenal dengan penekanan pada kebangkitan rohani, pengajaran tentang baptisan Roh Kudus, serta karunia-karunia Roh Kudus seperti berbahasa roh dan penyembuhan.</p>
    </div>

    <div class=pt-60>
        <h1 class="text-center font-semibold text-3xl">VALUE GEREJA</h1><br>
        <div class="flex justify-content:space-around">
                <div class="text-center text-lg m-5">VISI<br>
                    <h3 class="text-balance m-2">Menjadikan jemaat yang berakar, bertumbuh, berbuah menuju kedewasaan penuh di dalam Yesus Kristus.
                    <br>- Efesus 4:3 -</h3>
                </div>
            
                <div class="text-center text-lg m-5">MISI<br>
                    <h3 class="text-balance m-2">Membawa setiap jemaat mengenal / intim dengan Kristus dalam beribadah kepada-Nya dan menjadi keluarga yang saling mengasihi, bertumbuh dalam iman serta melayani Tuhan berdasarkan kasih Agape.
                    <br>- 1 Yohanes 4:8 -</h3>
                </div>
        </div>
    </div>

    <div class=pt-60>
        <h1 class="text-center font-semibold text-3xl">PROFIL GEMBALA JEMAAT</h1>
        <img src="{{ asset('images/Imago-Dei.png') }}" width="100" height="200" float: left>
        <p class="text-right text-lg text-balance">Pastor Philip Mantofa dilahirkan di Surabaya pada tanggal 27 September, 1974. Dari kota kelahirannya, ia menempuh sekolah di Taipei, Singapore, dan akhirnya bertobat saat SMA di Vancouver, Canada. Dua tahun setelah lulus sarjana sekolah Alkitab, saat kerusuhan terjadi di Indonesia pada bulan Mei 1998, ia memutuskan untuk pulang ke tanah airnya demi memberitakan Injil. Saat ini, ia menjabat sebagai gembala senior organisasi dan jaringan gereja ini.</p>
    </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const headlines = document.querySelectorAll('.headline .flex');
        
        headlines.forEach((headline) => {
            const originalContent = headline.innerHTML;

            // Duplikasikan konten
            headline.innerHTML += originalContent;
        });
    });
</script>
@endsection