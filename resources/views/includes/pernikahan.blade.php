@extends('base.base')

@section('content')

<div class="container m-auto">
<h1 class="text-center font-bold mt-10 text-4xl">Layanan Pernikahan</h1>
  </div>
  <div class="gender-selection text-center mt-5">
      <input type="radio" id="pria" name="gender" value="Pria">
      <label for="pria">Pria</label>
      <input type="radio" id="wanita" name="gender" value="Wanita">
      <label for="wanita">Wanita</label>
    </div>
  <form action="#" method="POST" class="mx-auto mt-16 max-w-xl sm:mt-10">
    <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">
      <div>
        <label for="nama-lengkap" class="block text-sm font-semibold leading-6 text-gray-900">Nama Lengkap</label>
        <div class="mt-2.5">
          <input type="text" name="nama-lengkap" id="nama-lengkap" autocomplete="given-name" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        </div>
      </div>
      <div>
        <label for="lahir" class="block text-sm font-semibold leading-6 text-gray-900">Tempat, Tanggal Lahir</label>
        <div class="mt-2.5">
          <input type="text" name="lahir" id="lahir" autocomplete="family-name" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        </div>
      </div>
      <div class="sm:col-span-2">
        <label for="phone-number" class="block text-sm font-semibold leading-6 text-gray-900">No HP</label>
          <input type="tel" name="phone-number" id="phone-number" autocomplete="tel" class="block w-full rounded-md border-0 px-3.5 py-2 pl-20 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        </div>
      </div>
      <div class="sm:col-span-2">
        <label for="gereja" class="block text-sm font-semibold leading-6 text-gray-900">Asal Gereja</label>
        <div class="mt-2.5">
        <input type="text" name="gereja" id="gereja" autocomplete="family-name" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        </div>
      </div>
    <div class="mt-10">
      <button type="submit" class="block w-full rounded-md bg-indigo-600 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Submit</button>
    </div>
  </form>
</div>
    </div>
@endsection
