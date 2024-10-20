@extends('admin.base')
@section('content')
<div class="min-h-full">
    <br>

    <div class="mb-4 w-3/5 max-w-full mx-auto">
            <h1 class="text-2xl font-bold text-center">Daftar Jemaat</h1>
    </div>

    <div class="mb-4 w-3/5 max-w-full mx-auto">
        <button type="submit" class="w-full bg-red-300 text-white font-semibold py-2 rounded-md  hover:bg-red-900">
        <a href="/jemaat/add">ADD JEMAAT</a>
        </button> 
    </div>
    <center>
        <div class=" w-10/12">
            <table id="tableJemaat" class="w-full whitespace-nowrap">
                <thead>
                    <tr class="text-left">
                        <th class="border px-6 py-4">No</th>
                        <th class="border px-6 py-4">Nama</th>
                        <th class="border px-6 py-4">Jenis Kelamin</th>
                        <th class="border px-6 py-4 w-64 text-wrap">Alamat</th>
                        <th class="border px-6 py-4">Nomor Handpone</th>
                        <th class="border px-6 py-4">Tempat Lahir</th>
                        <th class="border px-6 py-4">Tanggal Lahir</th>
                        <th class="border px-6 py-4">Action</th>
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
                    <td class="border px-6 py-4">
                        <form id="checkin-form-{{ $jemaat->id }}" action="{{ route('jemaat.edit', $jemaat->id) }}" method="POST" class="inline-block">
                            @csrf
                            @method('PUT')
                            <button type="submit" class="mt-4 bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600">Edit</button>
                        </form>
                        <form id="delete-form-{{ $jemaat->id }}" action="{{ route('jemaat.delete', $jemaat->id) }}" method="POST" class="inline-block ml-2">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="mt-4 bg-red-500 text-white py-2 px-4 rounded hover:bg-red-600">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
            </table>
            <script>
                $(document).ready(function () {
                    $('#tableJemaat').DataTable({
                        scrollX: true 
                    });
                });
            </script>
            {{ $jemaats->links('vendor.pagination.tailwind') }}
        </div>
    </center>
</div>
@endsection