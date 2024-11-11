@extends('admin.base')

@section('content')
<style>

    th.sorting::before,th.sorting::after{
        display: none !important;
    }
</style>


<div class="min-h-full">
    <br>

    <div class="mb-4 w-3/5 max-w-full mx-auto">
            <h1 class="text-2xl font-bold text-center">Daftar Jemaat</h1>
    </div>

    <div class="mb-4 w-3/5 max-w-full mx-auto">
        <button type="submit" class="w-full bg-red-900 text-white font-semibold py-2 rounded-md  hover:bg-red-700">
        <a href="/jemaat/add">ADD JEMAAT</a>
        </button> 
    </div>
    
    <br>

    <center>
        <div class=" w-10/12">
            <table id="tableKematians" class="w-full whitespace-nowrap">
                <thead>
                    <tr class="text-left">
                        <th class="border px-6 py-4">No</th>
                        <th class="border px-6 py-4">Nama Lengkap</th>
                        <th class="border px-6 py-4">Tanggal Meninggal</th>
                        <th class="border px-6 py-4 w-64 text-wrap">No Telepon Keluarga/Wali</th>
                        <th class="border px-6 py-4">Pendeta</th>
                        <th class="border px-6 py-4">Keterangan</th>

            </tr>
            </thead>
            <tbody>
                @foreach ($kematians as $kematian)
                <tr>
                    <td class="border px-6 py-4">{{ $kematian->id }}</td>
                    <td class="border px-6 py-4">{{ $kematian->namaLengkap}}</td>
                    <td class="border px-6 py-4">{{ $kematian->tanggalMeninggal}}</td>
                    <td class="border px-6 py-4">{{ $kematian->noHp}}</td>
                    <td class="border px-6 py-4">{{ $kematian->pendeta}}</td>
                    <td class="border px-6 py-4">{{ $kematian->keterangan}}</td>
                </tr>
                @endforeach
            </tbody>
            </table>
            {{-- <script>
                $(document).ready(function () {
                    $('#tableJemaat').DataTable({
                        scrollX: true 
                    });
                });
            </script>
            {{ $jemaats->links('vendor.pagination.tailwind') }} --}}
        </div>
    </center>
</div>
@endsection