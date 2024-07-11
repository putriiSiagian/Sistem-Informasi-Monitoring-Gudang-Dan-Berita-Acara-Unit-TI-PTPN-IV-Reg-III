@extends('Master.Layouts.app', ['title' => $title])

@section('content')
<!-- PAGE-HEADER -->
<div class="page-header">
    <h1 class="page-title">Hapus Barang Masuk</h1>
    <div>
        <ol class="breadcrumb">
            <li class="breadcrumb-item text-gray"></li>
            <li class="breadcrumb-item active" aria-current="page">Hapus Barang Masuk</li>
        </ol>
    </div>
</div>
<!-- PAGE-HEADER END -->

<!-- ROW -->
<div class="row row-sm">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header justify-content-between">
                <h3 class="card-title">Konfirmasi Hapus Data</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('lap-bm.destroy', $barangMasuk->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <div class="row mb-4">
                        <div class="col-12">
                            <p>Apakah Anda yakin ingin menghapus data Barang Masuk berikut?</p>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="fw-bold">Tanggal Masuk</label>
                                <p>{{ $barangMasuk->tgl }}</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="fw-bold">Kode Barang Masuk</label>
                                <p>{{ $barangMasuk->kode_barang_masuk }}</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="fw-bold">Kode Barang</label>
                                <p>{{ $barangMasuk->kode_barang }}</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="fw-bold">Transaksi</label>
                                <p>{{ $barangMasuk->customer }}</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="fw-bold">Barang</label>
                                <p>{{ $barangMasuk->barang }}</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="fw-bold">Jumlah Masuk</label>
                                <p>{{ $barangMasuk->jumlah_masuk }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-danger"><i class="fe fe-trash"></i> Hapus</button>
                            <a href="{{ route('lap-bm.index') }}" class="btn btn-secondary"><i class="fe fe-arrow-left"></i> Kembali</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- END ROW -->

@endsection

@section('scripts')
<script>
    $(document).ready(function() {
        // Script tambahan jika diperlukan
    });
</script>
@endsection
