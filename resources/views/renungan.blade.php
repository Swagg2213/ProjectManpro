@extends('base.base')

@section('content')

<div class="container m-auto pt-16">
    <h1 class="text-center font-bold mt-10 text-4xl">RENUNGAN</h1>
</div>

    <div class="container flex justify-center px-14 py-10 grid-cols-1 gap-8 md:grid-cols-4 flex-shrink: 1 text-center">
        @foreach ($renungans as $renungan)

        <div class="bg-white dark:bg-slate-800 rounded-lg px-6 py-8 ring-1 ring-slate-900/5 shadow-xl w-80 flex flex-col">
            <div class = "w-full flex justify-center">
                <img src="{{ asset('storage/'. $renungan->poster) }}">
            </div>

            <h5 class="text-white font-bold mb-3 mt-1">{{ $renungan->judul }}</h5>
            <h6 class="text-white font-bold mb-1">Renungan Oleh: {{ $renungan->pembuat }}</h6>
            <p class="text-center text-white">
                {{ Str::limit($renungan->isiRenungan, 200) }}
            </p>
            
            <button>
                <br>
                <a href="/renungan/{{$renungan->id  }}" class="rounded-md bg-indigo-500 px-3 py-3 text-sm font-semibold text-white">Klik untuk membaca!</a>
            </button>
        </div>
        @endforeach
    </div>

@endsection 