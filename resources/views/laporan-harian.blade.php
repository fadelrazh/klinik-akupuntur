<title>Laporan Diagnosa Harian </title>
@extends('layouts.laporan-main')
@section('content')
    @if ($errors->any())
        @foreach ($errors->all() as $item)
            <div class="alert alert-danger" role="alert">
                {{ $item }}
            </div>
        @endforeach
    @endif

    @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif
    <div class="container">
        <form action="/clearlaporan" method="POST">
            @csrf
            <button type="submit" class="btn btn-danger"
                onClick="return confirm('Yakin ingin clear data?')">Clear Laporan</button>
        </form>

        <h1>Laporan Pasien Harian</h1>
        </-------------------------------------------------------- Tabel
            -----------------------------------------------------------------------------------* />
        <br />
        <div class="table-responsive">
            <table class="table table-flush" id="products-list">
                <thead class="thead-dark">
                    <tr>
                        <th>No</th>
                        <th>Tanggal Daftar</th>
                        <th>Nama</th>
                        <th>Tanggal Lahir</th>
                        <th>Kode Pasien</th>
                        <th>Lama/Baru</th>
                        <th>Jenis Kelamin</th>
                        <th>Diagnosa</th>
                        <th>Alamat Rumah</th>
                        <th>No Handphone</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $r)
                    <tr>
                        <td>{{ $count = $count + 1 }}</td>
                        <td>{{ $r->created_at->format('d/m/Y -- H:i') }}</td>
                        <td>{{ $r->nama }}</td>
                        <td>{{ $r->lahir->format('d/m/Y') }}</td>
                        <td>{{ $r->kodepasien }}</td>
                        <td>{{ $r->lamabaru == '' ? '-' : $r->lamabaru }}</td>
                        <td>{{ $r->kelamin }}</td>
                        <td>{{ $r->diagnosa }}</td>
                        <td>{{ $r->alamat }}</td>
                        <td>{{ $r->telepon }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>



    </div>
    @push('scripts')
        <script>
            $(document).ready(function() {
                $('#products-list').DataTable({
                    dom: 'lBfrtip',
                    lengthMenu: [
                        [50, 100, 200, -1],
                        ['50', '100', '200', 'All']
                    ],
                    buttons: [{
                            extend: 'excel',
                            text: 'Excel',
                            messageTop: 'Laporan Diagnosa Harian Tanggal'+'{{  \Carbon\Carbon::now()->format("d-M(m)-Y") }}'

                        },
                        {
                            extend: 'copy',
                            text: 'Copy Isi',

                        },


                    ],

                    language: {
                        "searchPlaceholder": "Cari nama pasien",
                        "zeroRecords": "Tidak ditemukan data yang sesuai",
                        "emptyTable": "Tidak terdapat data di tabel"
                    }
                });
            });
        </script>
    @endpush
@endsection
