@extends('base.base')

@section('content')

<br>
<br>
    <div class="container px-12 my-8 mx-auto grid grid-cols-1 gap-6">
        <div class="bg-white dark:bg-slate-800 rounded-lg px-6 py-8 ring-1 ring-slate-900/5 shadow-xl">
            <h1 class="text-slate-900 dark:text-white text-base text-2xl tracking-tight">KEBAKTIAN UMUM</h1>
            <hr>

            <div class = "max w-full h-auto px-6">
                <br><img src="{{URL::asset('/images/ibadah1.jpeg')}}">
            </div>
            
            <h3 class="text-slate-900 dark:text-white text-base text-xl tracking-tight text-right">
                Minggu, 12 September 2025 <br>
                09.00-11.00
            </h3><br>

            <p class="text-slate-500 dark:text-slate-400 mt-2 text-large">
                Tema : Kasih yang Tak Pernah Gagal <br>
                Pembicara : Pdt. Yohanes Manurung <br><br>
                Kasih Tuhan mengalir tanpa henti dalam kehidupan kita. Saat kita merasa lelah dan tak berdaya, kasih-Nya selalu ada, membawa kekuatan baru. Mari datang dan temukan cinta yang tak pernah gagal ini, yang mampu mengubah setiap hati yang terbuka.
            </p>
        </div>

        <div class="bg-white dark:bg-slate-800 rounded-lg px-6 py-8 ring-1 ring-slate-900/5 shadow-xl">
            <h1 class="text-slate-900 dark:text-white text-base text-2xl tracking-tight">KEBAKTIAN FELLOWSHIP</h1>
            <hr>

            <div class = "max w-full h-auto px-6">
                <br><img src="{{URL::asset('/images/ibadah2.jpeg')}}">
            </div>
            
            <h3 class="text-slate-900 dark:text-white text-base text-xl tracking-tight text-right">
                Sabtu, 1 Oktober 2025 <br>
                18.00-19.30
            </h3><br>

            <p class="text-slate-500 dark:text-slate-400 mt-2 text-large">
                Tema : Jodoh Bukan di Tangan Tuhan?! <br>
                Pembicara : Pdt. Erick Sudharma <br><br>
                Sering kali kita mendengar bahwa jodoh di tangan Tuhan, namun benarkah demikian? Dalam khotbah ini, kita akan belajar bahwa Tuhan memberikan kita kebebasan untuk memilih, termasuk dalam soal pasangan hidup. Kuncinya bukan menunggu tanpa usaha, tetapi mencari dengan hikmat, sambil mempercayai Tuhan untuk membimbing hati dan langkah kita. Jodoh adalah tentang pilihan, persiapan, dan tanggung jawab, bukan sekadar takdir.        
            </p>
        </div>

            
        <div class="bg-white dark:bg-slate-800 rounded-lg px-6 py-8 ring-1 ring-slate-900/5 shadow-xl">
            <h1 class="text-slate-900 dark:text-white text-base text-2xl tracking-tight">KEBAKTIAN DOA PUASA</h1>
            <hr>

            <div class = "max w-full h-auto px-6">
                <br><img src="{{URL::asset('/images/ibadah3.jpeg')}}">
            </div>
            
            <h3 class="text-slate-900 dark:text-white text-base text-xl tracking-tight text-right">
                Minggu, 20 Oktober 2025 <br>
                09.00-11.00
            </h3><br>

            <p class="text-slate-500 dark:text-slate-400 mt-2 text-large">
                Tema : Bersinar di Tengah Kegelapan <br>
                Pembicara : Pdt. Jessica Wijaya <br><br>
                Tuhan memanggil kita untuk menjadi terang di dunia yang sering kali gelap dan penuh kekhawatiran. Melalui khotbah ini, kita akan diberi inspirasi untuk menjadi saksi yang berani, memancarkan terang Kristus di setiap tempat dan situasi.        
            
        </div>

        <div class="bg-white dark:bg-slate-800 rounded-lg px-6 py-8 ring-1 ring-slate-900/5 shadow-xl">
            <h1 class="text-slate-900 dark:text-white text-base text-2xl tracking-tight">IBADAH WANITA</h1>
            <hr>

            <div class = "max w-full h-auto px-6">
                <br><img src="{{URL::asset('/images/ibadah4.jpeg')}}">
            </div>
            
            <h3 class="text-slate-900 dark:text-white text-base text-xl tracking-tight text-right">
                Jumat, 25 Oktober 2025 <br>
                18.00-19.30
            </h3><br>

            <p class="text-slate-500 dark:text-slate-400 mt-2 text-large">
                Tema : Hidup Berbuah Dalam Roh <br>
                Pembicara : Pdt. Yohanes Manurung <br><br>
                Apa yang terlihat dalam hidup orang yang dipenuhi Roh Kudus? Kita akan mengeksplorasi buah-buah Roh yang nyata dalam keseharian, bagaimana Tuhan bekerja dalam kita untuk menghasilkan karakter yang memuliakan-Nya.        
            </p>
        </div>
    </div>

@endsection