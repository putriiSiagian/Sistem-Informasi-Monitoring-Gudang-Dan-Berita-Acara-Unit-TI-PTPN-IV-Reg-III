<!-- MODAL TAMBAH -->
<div class="modal fade" data-bs-backdrop="static" id="modaldemo8">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content modal-content-demo">
            <div class="modal-header">
                <h6 class="modal-title">Tambah </h6><button aria-label="Close" class="btn-close"
                    data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
            </div>
        <div class="page-header">
    <h1 class="page-title">Berita Acara Serah Terima</h1>
    <div>
        <ol class="breadcrumb">
            <li class="breadcrumb-item text-gray"></li>
            <li class="breadcrumb-item active" aria-current="page">Berita Acara Serah Terima</li>
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
                <div>
                    <form action= "{{route('lap-bk.pdf') }}" method="GET">
                        <button class="btn btn-danger-light" type="submit"><i class="fa fa-file-pdf-o"></i> PDF</button>
                    </form>                     
                </div>
            </div>
            <div class="card-body">
                <div class="document-container">
                    <!-- Header with Logo -->
                    <div class="text-center mb-5">
                        <div class="d-flex justify-content-center align-items-center">
                            <img src="{{ asset('assets/default/web/default.png') }}" alt="Default" style="width: 50px; margin-right: 20px;">
                            <div>
                                <h2>BERITA ACARA SERAH TERIMA</h2>
                                <h4>PTPN IV REGIONAL III</h4>
                            </div>
                        </div>
                    </div>

                    <p>Pada hari ini, 
                        <select name="hari" class="form-control d-inline" style="width: auto; display: inline;">
                            <option value="Senin">Senin</option>
                            <option value="Selasa">Selasa</option>
                            <option value="Rabu">Rabu</option>
                            <option value="Kamis">Kamis</option>
                            <option value="Jumat">Jumat</option>
                            <option value="Sabtu">Sabtu</option>
                            <option value="Minggu">Minggu</option>
                        </select>, 
                        tanggal <input type="date" name="tanggal" class="form-control d-inline" style="width: auto; display: inline;">, kami yang bertandatangan di bawah ini:</p>

                    <div class="row mt-4">
                        <div class="col-md-6">
                            <h4>I. Data Pihak Pertama</h4>
                            <div class="form-group">
                                <label for="namaPihakPertama">Nama</label>
                                <input type="text" id="namaPihakPertama" name="namaPihakPertama" class="form-control" oninput="syncNama('namaPihakPertama', 'tandaTanganPihakPertama')">
                            </div>
                            <div class="form-group">
                                <label for="jabatanPihakPertama">Jabatan</label>
                                <input type="text" id="jabatanPihakPertama" name="jabatanPihakPertama" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="teleponPihakPertama">Nomor HP</label>
                                <input type="text" id="teleponPihakPertama" name="teleponPihakPertama" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="unitPihakPertama">Unit/Keb/PKS</label>
                                <input type="text" id="unitPihakPertama" name="unitPihakPertama" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <h4>II. Data Pihak Kedua</h4>
                            <div class="form-group">
                                <label for="namaPihakKedua">Nama</label>
                                <input type="text" id="namaPihakKedua" name="namaPihakKedua" class="form-control" oninput="syncNama('namaPihakKedua', 'tandaTanganPihakKedua')">
                            </div>
                            <div class="form-group">
                                <label for="jabatanPihakKedua">Jabatan</label>
                                <input type="text" id="jabatanPihakKedua" name="jabatanPihakKedua" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="teleponPihakKedua">Nomor HP</label>
                                <input type="text" id="teleponPihakKedua" name="teleponPihakKedua" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="unitPihakKedua">Unit/Keb/PKS</label>
                                <input type="text" id="unitPihakKedua" name="unitPihakKedua" class="form-control">
                            </div>
                        </div>
                    </div>

                    <p class="mt-4">Dalam hal ini disebut sebagai PIHAK PERTAMA (yang menyerahkan) dan PIHAK KEDUA (yang menerima).</p>

                    <p>Dengan ini menyatakan bahwa PIHAK PERTAMA telah menyerahkan kepada PIHAK KEDUA dan PIHAK KEDUA telah menerima perangkat sebagai berikut:</p>

                    <div class="table-responsive">
                        <table class="table table-bordered text-nowrap border-bottom dataTable no-footer dtr-inline collapsed">
                            <thead>
                                <tr>
                                    <th>Nama Barang</th>
                                    <th>Type</th>
                                    <th>Jumlah</th>
                                    <th>Service Tag / SN</th>
                                    <th>Keterangan</th>
                                </tr>
                            </thead>
                            <tbody id="barangTableBody">
                                <tr>
                                    <td><input type="text" name="namaBarang[]" class="form-control"></td>
                                    <td><input type="text" name="typeBarang[]" class="form-control"></td>
                                    <td><input type="number" name="jumlahBarang[]" class="form-control"></td>
                                    <td><input type="text" name="snBarang[]" class="form-control"></td>
                                    <td><input type="text" name="keteranganBarang[]" class="form-control"></td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="d-flex justify-content-between mt-2">
                            <button type="button" class="btn btn-secondary" onclick="addRow()">
                                <i class="fe fe-plus"></i> Tambah Barang
                            </button>
                            <button type="button" class="btn btn-danger" onclick="deleteLastRow()">
                                <i class="fe fe-minus"></i> Hapus Barang
                            </button>
                        </div>
                    </div>

                    <p class="mt-4">Sejak penandatanganan berita acara ini, maka barang tersebut menjadi tanggung jawab PIHAK KEDUA untuk dipergunakan sebagai alat kerja.</p>

                    <div class="row mt-5">
                        <div class="col-md-6 text-center">
                            <p>PIHAK PERTAMA</p>
                            <br><br>
                            <p id="tandaTanganPihakPertama"></p>
                        </div>
                        <div class="col-md-6 text-center">
                            <p>PIHAK KEDUA</p>
                            <br><br>
                            <p id="tandaTanganPihakKedua"></p>
                        </div>
                        <!-- Footer with Logo -->
                        <div class="text-center mt-5">
                            <img src="{{ asset('assets/default/web/akhlak.png') }}" alt="akhlak" style="width: 150px; margin-right: 20px;">
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>
</div>


@section('formTambahJS')
    <script>
        function checkForm() {
            const satuan = $("input[name='satuan']").val();
            setLoading(true);
            resetValid();

            if (satuan == "") {
                validasi('Nama Satuan wajib di isi!', 'warning');
                $("input[name='satuan']").addClass('is-invalid');
                setLoading(false);
                return false;
            } else {
                submitForm();
            }

        }

        function submitForm() {
            const satuan = $("input[name='satuan']").val();
            const ket = $("textarea[name='ket']").val();

            $.ajax({
                type: 'POST',
                url: "{{ route('satuan.store') }}",
                enctype: 'multipart/form-data',
                data: {
                    satuan: satuan,
                    ket: ket
                },
                success: function(data) {
                    $('#modaldemo8').modal('toggle');
                    swal({
                        title: "Berhasil ditambah!",
                        type: "success"
                    });
                    table.ajax.reload(null, false);
                    reset();

                }
            });
        }

        function resetValid() {
            $("input[name='satuan']").removeClass('is-invalid');
        };

        function reset() {
            resetValid();
            $("input[name='satuan']").val('');
            $("textarea[name='ket']").val('');
            setLoading(false);
        }

        function setLoading(bool) {
            if (bool == true) {
                $('#btnLoader').removeClass('d-none');
                $('#btnSimpan').addClass('d-none');
            } else {
                $('#btnSimpan').removeClass('d-none');
                $('#btnLoader').addClass('d-none');
            }
        }
    </script>
@endsection
