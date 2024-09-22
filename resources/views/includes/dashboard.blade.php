@extends('base.base')

@section('content')

    <div class="container m-auto space-y-1">
        <div class = "w-full h-1/2">
            <!-- <div id="carouselExample" class="carousel slide">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{URL::asset('/images/church.jpg')}}">
                    </div>
                    <div class="carousel-item">
                        <img src="{{URL::asset('/images/church.jpg')}}">
                    </div>
                    <div class="carousel-item">
                        <img src="{{URL::asset('/images/church.jpg')}}">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div> -->
            <img src="{{URL::asset('/images/church.jpg')}}">
        </div>
        
        <br><br><h1 class="text-center font-bold mt-10 text-6xl">GPPS MAHANAIM</h1>
        <h2 class="text-center mt-10 text-xl py-0">Gereja Pantekosta Pusat Surabaya</h2>
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
        <img src="images/wall.jpg" width="100" height="200" float: left>
        <p class="text-right text-lg text-balance">Pastor Philip Mantofa dilahirkan di Surabaya pada tanggal 27 September, 1974. Dari kota kelahirannya, ia menempuh sekolah di Taipei, Singapore, dan akhirnya bertobat saat SMA di Vancouver, Canada. Dua tahun setelah lulus sarjana sekolah Alkitab, saat kerusuhan terjadi di Indonesia pada bulan Mei 1998, ia memutuskan untuk pulang ke tanah airnya demi memberitakan Injil. Saat ini, ia menjabat sebagai gembala senior organisasi dan jaringan gereja ini.</p>
    </div>
@endsection