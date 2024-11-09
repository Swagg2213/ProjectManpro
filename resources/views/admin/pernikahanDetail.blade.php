@extends('admin.base')

@section('title', 'View Pernikahan')

@section('content')
<center>
    
    <div class="bg-white shadow-md rounded-lg p-6 w-10/12">
        <h1 class="text-xl font-bold mb-4 text-center">Data Pernikahan</h1>
        <div id="data-display" class="mb-4">
            <!-- Data will be displayed here -->
            <div class="flex mb-7">
                <span class="font-semibold w-1/2 text-left">Rencana Tanggal Pernikahan</span>
                <span class="mx-2">:</span>
                <span id="tanggalPernikahan" class="text-gray-700">{{$wedding->tanggalPernikahan}}</span>
            </div>

            <h2 class="text-lg bg-red-200 font-semibold mb-2 text-left">Data Perempuan</h2>
            <div class="flex mb-2">
                <span class="font-semibold w-1/2 text-left">Nama Perempuan</span>
                <span class="mx-2">:</span>
                <span id="namaP" class="text-gray-700">{{$wedding->namaP}}</span>
            </div>
            <div class="flex mb-2">
                <span class="font-semibold w-1/2 text-left">Alamat</span>
                <span class="mx-2">:</span>
                <span id="alamatP" class="text-gray-700">{{$wedding->alamatP}}</span>
            </div>
            <div class="flex mb-2">
                <span class="font-semibold w-1/2 text-left">Gereja</span>
                <span class="mx-2">:</span>
                <span id="gerejaP" class="text-gray-700">{{$wedding->gerejaP}}</span>
            </div>
            <div class="flex mb-2">
                <span class="font-semibold w-1/2 text-left">Nomor HP</span>
                <span class="mx-2">:</span>
                <span id="noHpP" class="text-gray-700">{{$wedding->noHpP}}</span>
            </div>
            <div class="flex mb-2">
                <span class="font-semibold w-1/2 text-left">Tempat Lahir</span>
                <span class="mx-2">:</span>
                <span id="tempatLahirP" class="text-gray-700">{{$wedding->tempatLahirP}}</span>
            </div>
            <div class="flex mb-2">
                <span class="font-semibold w-1/2 text-left">Tanggal Lahir</span>
                <span class="mx-2">:</span>
                <span id="tanggalLahirP" class="text-gray-700">{{$wedding->tanggalLahirP}}</span>
            </div>
            <div class="flex mb-7">
                <span class="font-semibold w-1/2 text-left">Pernah Menikah</span>
                <span class="mx-2">:</span>
                <span id="menikahP" class="text-gray-700">{{$wedding->menikahP}}</span>
            </div>

            <h2 class="text-lg bg-blue-300 font-semibold mb-2 text-left">Data Laki-laki</h2>
            <div class="flex mb-2">
                <span class="font-semibold w-1/2 text-left">Nama Laki-laki</span>
                <span class="mx-2">:</span>
                <span id="namaL" class="text-gray-700">{{$wedding->namaL}}</span>
            </div>
            <div class="flex mb-2">
                <span class="font-semibold w-1/2 text-left">Alamat</span>
                <span class="mx-2">:</span>
                <span id="alamatL" class="text-gray-700">{{$wedding->alamatL}}</span>
            </div>
            <div class="flex mb-2">
                <span class="font-semibold w-1/2 text-left">Gereja</span>
                <span class="mx-2">:</span>
                <span id="gerejaL" class="text-gray-700">{{$wedding->gerejaL}}</span>
            </div>
            <div class="flex mb-2">
                <span class="font-semibold w-1/2 text-left">Nomor HP</span>
                <span class="mx-2">:</span>
                <span id="noHpL" class="text-gray-700">{{$wedding->noHpL}}</span>
            </div>
            <div class="flex mb-2">
                <span class="font-semibold w-1/2 text-left">Tempat Lahir</span>
                <span class="mx-2">:</span>
                <span id="tempatLahirL" class="text-gray-700">{{$wedding->tempatLahirL}}</span>
            </div>
            <div class="flex mb-2">
                <span class="font-semibold w-1/2 text-left">Tanggal Lahir</span>
                <span class="mx-2">:</span>
                <span id="tanggalLahirL" class="text-gray-700">{{$wedding->tanggalLahirL}}</span>
            </div>
            <div class="flex mb-2">
                <span class="font-semibold w-1/2 text-left">Pernah Menikah</span>
                <span class="mx-2">:</span>
                <span id="menikahL" class="text-gray-700">{{$wedding->menikahL}}</span>
            </div>

            <div class="w-6/12 mt-6">
    <a href="{{ route('pernikahan.view') }}" class="block w-full bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded text-center">
        Back
    </a>
</div>

        </div>
    </div>

</center>
@endsection
