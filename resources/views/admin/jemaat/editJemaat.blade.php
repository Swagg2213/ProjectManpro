@extends('admin.base')
@section('content')
<div class="min-h-full">

    <div class="mb-4 w-3/5 max-w-full mx-auto">
        <h1 class="text-2xl font-bold text-center">Edit Jemaat</h1>
    </div>

<form class="w-3/5 max-w-full mx-auto" method="POST" action="{{ route('jemaat.update', $jemaat->id) }}">
    @csrf
    @method('put')
    <div class="relative z-0 w-full mb-5 group">
        <input type="text" name="namaLengkap" value="{{$jemaat->nama}}" id="floating_email" class="block py-2.5 px-0 w-full text-sm lofi:text-black bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
    </div>
    <div class="relative z-0 w-full mb-5 group">
        <input type="text" name="jenisKelamin" value="{{$jemaat->jenisKelamin}}" id="floating_password" class="block py-2.5 px-0 w-full text-sm text-zinc-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
    </div>
    <div class="relative z-0 w-full mb-5 group">
        <input type="text" name="alamat" value="{{$jemaat->alamat}}" id="floating_repeat_password" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none border-gray-600 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
    </div>
    <div class="relative z-0 w-full mb-5 group">
        <label for=""></label>
        <input type="number" name="noHp" value="{{$jemaat->noHp}}" id="floating_repeat_password" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none border-gray-600 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
    </div>

    <div class="grid md:grid-cols-2 md:gap-6">

      <div class="relative z-0 w-full mb-5 group">
          <input type="text" name="tempatLahir" value="{{$jemaat->tempatLahir}}" id="floating_first_name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none border-gray-600 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
      </div>
      <div class="relative z-0 w-full mb-5 group">
          <input type="text" name="tanggalLahir" value="{{$jemaat->tanggalLahir}}" id="floating_last_name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none border-gray-600 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
      </div>
    </div>

    <div class="mb-4">
        <button type="submit" class="w-full bg-blue-600 text-white font-semibold py-2 rounded-md  hover:bg-blue-950">
            Submit
        </button> 
    </div>

    <div class="mb-4">
        <button type="submit" onclick="history.back()" class="w-full  bg-slate-600 text-white font-semibold py-2 rounded-md hover:bg-slate-900">
            <a href="{{ Route('show.data') }}" >
                Back
            </a>
        </button>
    </div>
    
    

  </form>
</div>
@endsection