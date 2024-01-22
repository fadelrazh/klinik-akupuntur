<head>
    <style>
        #products-list_wrapper .dataTables_filter,
        #products-list_wrapper .dataTables_length {
            display: flex;
            align-items: center;
        }

        #products-list_wrapper .dataTables_filter input,
        #products-list_wrapper .dataTables_length select {

        }
        #products-list_wrapper .dataTables_length select {
            width: 70px;
        }
    </style>
</head>

@extends('layouts.main')
@section('content')

    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Data Antrian Pasien Harian</h1>
        </div>

        <div class="row mb-4">
            <div class="col">
                <a href="#" class="btn btn-info btn-icon-split" id="copyButton">
                    <span class="icon text-white-50">
                        <i class="fas fa-copy"></i>
                    </span>
                    <span class="text">Copy</span>
                </a>
                <button class="btn btn-warning btn-icon-split" id="exportButton" data-toggle="modal" data-target="#formUpload">
                    <span class="icon text-white-50">
                        <i class="fas fa-upload"></i>
                    </span>
                </button>
            </div>
        </div>

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

        <!-- DataTales Example -->
        <div class="card border-bottom-primary shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between bg-primary">
                <h6 class="m-0 font-weight-bold border-0 text-white">Daftar Antrian</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover" width="100%" cellspacing="0" id="products-list">
                        <thead class="card-header py-3 bg-primary">
                            <tr class="m-0 font-weight-bold border-0 text-white">
                                <th style="text-align: center;">No</th>
                                <th style="text-align: center;">Tools</th>
                                <th style="text-align: center;">No Antrian</th>
                                <th style="text-align: center;">Jam Daftar</th>
                                <th style="text-align: center;">Nama</th>
                                <th style="text-align: center;">Tanggal Lahir</th>
                                <th style="text-align: center;">Jenis Kelamin</th>
                                <th style="text-align: center;">Jenis Layanan</th>
                                <th style="text-align: center;">Keluhan</th>
                                <th style="text-align: center;">Dokter</th>
                                <th style="text-align: center;">Alamat</th>
                                <th style="text-align: center;">No Telpon</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $count = 0;
                            @endphp
                            @foreach($datarekam as $row)
                                <tr class="card-header py-3 bg-gray">
                                    <td style="font-size: 13px;">{{ $count = $count + 1 }}</td>
                                    <td style="font-size: 13px;"><a href="{{ route('rekam.edit', $row->id) }}" class="btn btn-warning" data-bs-toggle="tooltip" data-bs-original-title="Lihat Pasien">
                                        <i class="fas fa-pen text-white"></i>
                                    </a>
                                    <form action="{{ route('rekam.destroy', $row->id) }}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-danger"
                                            onClick="return confirm('Yakin ingin hapus data?')">
                                            <i class="fas fa-trash"></i></button>
                                    </form>
                                    </td>
                                    <td style="font-size: 13px;">{{ $row->nomorantrian }}</td>
                                    <td style="font-size: 13px;">{{ $row->updated_at->format('H:i:s -- d/m/Y'); }}</td>
                                    <td style="font-size: 13px;">{{ $row->pasien->nama }}</td>
                                    <td style="font-size: 13px;">{{ $row->pasien->lahir->format('d/M/Y'); }}</td>
                                    <td style="font-size: 13px;">{{ $row->pasien->kelamin }}</td>
                                    <td style="font-size: 13px;">{{ $row->layanan }}</td>
                                    <td style="font-size: 13px;">{{ $row->keluhan }}</td>
                                    <td style="font-size: 13px;">{{ $row->dokter->nama ?? "Dokter Tidak ada"}}</td>
                                    <td style="font-size: 13px;">{{ $row->pasien->alamat }}</td>
                                    <td style="font-size: 13px;">
                                        <a href="https://api.whatsapp.com/send?phone=<?php echo $row->pasien['telepon']; ?>"
                                            target=" _blank" title="Pesan WhatsApp" class="btn btn-success"  style="font-size: 13px;">
                                            <b>{{ $row->pasien->telepon }}</b>
                                        </a>

                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="sticky-footer bg-white">
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
                <span>Copyright &copy; Sistem Informasi Inventory Gudang PT. Bintang Fajar Mandiri <?php echo date("Y"); ?></span>
            </div>
        </div>
    </footer>
    <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    @push('scripts')
        <script>
            $(document).ready(function() {
                var table = $('#products-list').DataTable({
                    lengthMenu: [
                        [50, 100, 5, -1],
                        ['50', '100', '5', 'All']
                    ],
                    buttons: [
                        {
                            extend: 'excel',
                            text: 'Excel',
                            className: 'btn btn-warning',
                            messageTop: 'Data Antrian Harian per Tanggal '+'{{  \Carbon\Carbon::now()->format("d-M(m)-Y") }}'
                        },
                    ],
                    language: {
                        "searchPlaceholder": "Cari nama pasien",
                        "zeroRecords": "Tidak ditemukan data yang sesuai",
                        "emptyTable": "Tidak terdapat data di tabel"
                    }
                });

                table.buttons().container().appendTo('#exportButton');

                $('#copyButton').on('click', function() {
                    table.button('.buttons-copy').trigger();
                });
            });

            setTimeout(function() {
                window.location.reload();
            }, 16000);
        </script>
    @endpush
@endsection
