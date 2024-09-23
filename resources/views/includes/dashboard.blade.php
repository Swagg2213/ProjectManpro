@extends('base.base')

@section('content')

    <div class="container m-auto space-y-1">
        <div class = "w-full h-auto">
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
            <img src="{{URL::asset('/images/church.jpeg')}}">
        </div>
        
        <br><br><h1 class="text-center font-bold mt-10 text-6xl">GPPS MAHANAIM</h1>
        <h2 class="text-center mt-10 text-xl py-0">Gereja Pantekosta Pusat Surabaya</h2>
    </div>

    <div class=pt-40>
        <div class = "max w-full h-auto px-6">
            <br><img src="{{URL::asset('/images/ibadah3.jpeg')}}">
        </div>

        <br><h1 class="text-center font-semibold text-3xl">SEJARAH GEREJA</h1>
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
        <div class = "max w-full h-auto px-6 float: left">
            <br><img src="{{URL::asset('/images/pic.jpeg')}}">
        </div>
        <p class="text-right text-lg text-balance">
            Pdm. Ribka Mentari telah melayani sebagai gembala jemaat di Gereja Kasih Karunia sejak tahun 2010. Ia menyelesaikan pendidikan teologi di Universitas Kristen Duta Wacana dan dikenal atas khotbah-khotbahnya yang menginspirasi dan relevan dengan kehidupan sehari-hari.=
            Beliau ingin gereja ini dapat membina dan menciptakan keluarga-keluarga Kristen yang akan menjadi generasi pemimpin yang berdampak bagi sesama. Ia juga aktif dalam konseling pernikahan dan pembinaan rohani, membantu jemaat menemukan panggilan mereka dalam Kristus dan memperkuat komunitas gereja.   
        </p>
    </div>
@endsection