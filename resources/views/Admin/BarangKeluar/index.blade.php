@extends('Master.Layouts.app', ['title' => $title])

@section('content')
<<<<<<< HEAD
    <!-- PAGE-HEADER -->
    <div class="page-header">
        <h1 class="page-title">Barang Keluar</h1>
        <div>
            <ol class="breadcrumb">
                <li class="breadcrumb-item text-gray">Transaksi</li>
                <li class="breadcrumb-item active" aria-current="page">Barang Keluar</li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->


    <!-- ROW -->
    <div class="row row-sm">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header justify-content-between">
                    <h3 class="card-title">Data</h3>
                    @if ($hakTambah > 0)
                        <div>
                            <a class="modal-effect btn btn-primary-light" onclick="generateID()"
                                data-bs-effect="effect-super-scaled" data-bs-toggle="modal" href="#modaldemo8">Tambah Data
                                <i class="fe fe-plus"></i></a>
                        </div>
                    @endif
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="table-1"
                            class="table table-bordered text-nowrap border-bottom dataTable no-footer dtr-inline collapsed">
                            <thead>
                                <th class="border-bottom-0" width="1%">No</th>
                                <th class="border-bottom-0">Tanggal Keluar</th>
                                <th class="border-bottom-0">Kode Barang Keluar</th>
                                <th class="border-bottom-0">Kode Barang</th>
                                <th class="border-bottom-0">Barang</th>
                                <th class="border-bottom-0">Jumlah Keluar</th>
                                <th class="border-bottom-0">Tujuan</th>
                                <th class="border-bottom-0" width="1%">Action</th>
                            </thead>
                            <tbody></tbody>
                        </table>
                    </div>
=======
<!-- PAGE-HEADER -->
<div class="page-header">
    <h1 class="page-title">Data Barang Keluar</h1>
    <div>
        <ol class="breadcrumb">
            <li class="breadcrumb-item text-gray">Laporan</li>
            <li class="breadcrumb-item active" aria-current="page">Barang Keluar</li>
        </ol>
    </div>
</div>
<!-- PAGE-HEADER END -->

<!-- ROW -->
<div class="row row-sm">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header justify-content-between">
                <h3 class="card-title">Data</h3>
            </div>
            <div class="card-body">
                <div class="row mb-4">
                    <div class="col-12">
                        <label for="" class="fw-bold">Filter Tanggal</label>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <input type="text" name="tglawal" class="form-control datepicker-date" placeholder="Tanggal Awal">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <input type="text" name="tglakhir" class="form-control datepicker-date" placeholder="Tanggal Akhir">
                        </div>
                </div>
                <div class="table-responsive">
                    <table id="table-1" class="table table-bordered text-nowrap border-bottom dataTable no-footer dtr-inline collapsed">
                        <thead>
                            <th class="border-bottom-0" width="1%">No</th>
                            <th class="border-bottom-0">Tanggal Keluar</th>
                            <th class="border-bottom-0">Kode Barang Keluar</th>
                            <th class="border-bottom-0">Kode Barang</th>
                            <th class="border-bottom-0">Customer</th>
                            <th class="border-bottom-0">Barang</th>
                            <th class="border-bottom-0">Jumlah Keluar</th>
                        </thead>
                        <tbody></tbody>
                    </table>
>>>>>>> 59e08260a93abb1e79c11568a4c34e1ba86c3ae3
                </div>
            </div>
        </div>
    </div>
<<<<<<< HEAD
    <!-- END ROW -->

    @include('Admin.BarangKeluar.tambah')
    @include('Admin.BarangKeluar.edit')
    @include('Admin.BarangKeluar.hapus')
    @include('Admin.BarangKeluar.barang')

    <script>
        function generateID() {
            id = new Date().getTime();
            $("input[name='bkkode']").val("BK-" + id);
        }

        function update(data) {
            $("input[name='idbkU']").val(data.bk_id);
            $("input[name='bkkodeU']").val(data.bk_kode);
            $("input[name='kdbarangU']").val(data.barang_kode);
            $("input[name='jmlU']").val(data.bk_jumlah);
            $("input[name='tujuanU']").val(data.bk_tujuan.replace(/_/g, ' '));

            getbarangbyidU(data.barang_kode);

            $("input[name='tglkeluarU").bootstrapdatepicker({
                format: 'yyyy-mm-dd',
                autoclose: true
            }).bootstrapdatepicker("update", data.bk_tanggal);
        }

        function hapus(data) {
            $("input[name='idbk']").val(data.bk_id);
            $("#vbk").html("Kode BK " + "<b>" + data.bk_kode + "</b>");
        }

        function validasi(judul, status) {
            swal({
                title: judul,
                type: status,
                confirmButtonText: "Iya."
            });
        }
    </script>
@endsection

@section('scripts')
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        var table;
        $(document).ready(function() {
            //datatables
            table = $('#table-1').DataTable({

                "processing": true,
                "serverSide": true,
                "info": true,
                "order": [],
                "scrollX": true,
                "stateSave":true,
                "lengthMenu": [
                    [5, 10, 25, 50, 100],
                    [5, 10, 25, 50, 100]
                ],
                "pageLength": 10,

                lengthChange: true,

                "ajax": {
                    "url": "{{ route('barang-keluar.getbarang-keluar') }}",
                },

                "columns": [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex',
                        searchable: false
                    },
                    {
                        data: 'tgl',
                        name: 'bk_tanggal',
                    },
                    {
                        data: 'bk_kode',
                        name: 'bk_kode',
                    },
                    {
                        data: 'barang_kode',
                        name: 'barang_kode',
                    },
                    {
                        data: 'barang',
                        name: 'barang_nama',
                    },
                    {
                        data: 'bk_jumlah',
                        name: 'bk_jumlah',
                    },
                    {
                        data: 'tujuan',
                        name: 'bk_tujuan',
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false
                    },
                ],

            });
        });
    </script>
=======
</div>
<!-- END ROW -->

@endsection

@section('scripts')
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $(document).ready(function() {
        getData();
    });

    function getData() {
        //datatables
        table = $('#table-1').DataTable({

            "processing": true,
            "serverSide": true,
            "info": true,
            "order": [],
            "scrollX": true,
            "stateSave": true,
            "lengthMenu": [
                [5, 10, 25, 50, 100, -1],
                [5, 10, 25, 50, 100, 'Semua']
            ],
            "pageLength": 10,

            lengthChange: true,

            "ajax": {
                "url": "{{ route('lap-bm.getlap-bm') }}",
                "data": function(d) {
                    d.tglawal = $('input[name="tglawal"]').val();
                    d.tglakhir = $('input[name="tglakhir"]').val();
                }
            },

            "columns": [{
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex',
                    searchable: false
                },
                {
                    data: 'tgl',
                    name: 'bm_tanggal',
                },
                {
                    data: 'bm_kode',
                    name: 'bm_kode',
                },
                {
                    data: 'barang_kode',
                    name: 'barang_kode',
                },
                {
                    data: 'customer',
                    name: 'customer_nama',
                },
                {
                    data: 'barang',
                    name: 'barang_nama',
                },
                {
                    data: 'bm_jumlah',
                    name: 'bm_jumlah',
                },
            ],

        });
    }

    function filter() {
        var tglawal = $('input[name="tglawal"]').val();
        var tglakhir = $('input[name="tglakhir"]').val();
        if (tglawal != '' && tglakhir != '') {
            table.ajax.reload(null, false);
        } else {
            validasi("Isi dulu Form Filter Tanggal!", 'warning');
        }

    }

    function reset() {
        $('input[name="tglawal"]').val('');
        $('input[name="tglakhir"]').val('');
        table.ajax.reload(null, false);
    }
</script>
>>>>>>> 59e08260a93abb1e79c11568a4c34e1ba86c3ae3
@endsection
