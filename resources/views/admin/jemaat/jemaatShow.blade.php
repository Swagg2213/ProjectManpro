@extends('admin.base')
@section('content')
<div class="container">
    <div>
        <a href="/jemaat/add">ADD JEMAAT</a>
    </div>
<div class="flex flex-col justify-center content-center mt-10 place-content-center">
    <table class="w-full whitespace-nowrap">
        <thead>
            <tr class="text-left">
                <th class="border px-6 py-4">No</th>
                <th class="border px-6 py-4">Nama</th>
                <th class="border px-6 py-4">Jenis Kelamin</th>
                <th class="border px-6 py-4">Alamat</th>
                <th class="border px-6 py-4">Nomor Handpone</th>
                <th class="border px-6 py-4">Tempat Lahir</th>
                <th class="border px-6 py-4">Tanggal Lahir</th>
    </tr>
    </thead>
    <tbody>
        @foreach ($jemaats as $jemaat)
        <tr>
            <td class="border px-6 py-4">{{ $jemaat->id }}</td>
            <td class="border px-6 py-4">{{ $jemaat->nama}}</td>
            <td class="border px-6 py-4">{{ $jemaat->jenisKelamin}}</td>
            <td class="border px-6 py-4">{{ $jemaat->alamat}}</td>
            <td class="border px-6 py-4">{{ $jemaat->noHp}}</td>
            <td class="border px-6 py-4">{{ $jemaat->tempatLahir}}</td>
            <td class="border px-6 py-4">{{ $jemaat->tanggalLahir}}</td>
        </tr>
        @endforeach
    </tbody>
    </table>
    {{ $jemaats->links('vendor.pagination.tailwind') }}
</div>
</div>
@endsection