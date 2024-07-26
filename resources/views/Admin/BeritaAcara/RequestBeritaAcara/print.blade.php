
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berita Acara Serah Terima</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            font-size: 14px;
        }
        .container {
            width: 210mm;
            height: 297mm;
            padding: 20mm;
            margin: auto;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background: white;
        }
        .header, .footer {
            text-align: center;
            margin-bottom: 20px;
        }
        .header img {
            width: 100px;
            margin-bottom: 20px;
        }
        .footer img {
            width: 300px;
        }
        .content {
            margin-top: 20px;
        }
        .content p {
            margin: 10px 0;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        .signature {
            margin-top: 50px;
            display: flex;
            justify-content: space-between;
        }
        .signature div {
            width: 45%;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="d-flex justify-content-center align-items-center">
                <img src="{{ asset('assets/default/web/default.png') }}" alt="Default" style="width: 70px; margin-right: 20px;">
                <div>
                    <h2>BERITA ACARA SERAH TERIMA</h2>
                    <h4>PTPN IV REGIONAL III</h4>
                </div>
            </div>
        </div>

        <div class="content">
            <p>Pada hari ini {{ $hari }}, tanggal {{ $tanggal }}, kami yang bertandatangan di bawah ini:</p>

            <h4>I. Data Pihak Pertama</h4>
            <p>Nama: {{ $namaPihakPertama }}</p>
            <p>Jabatan: {{ $jabatanPihakPertama }}</p>
            <p>Nomor HP: {{ $teleponPihakPertama }}</p>
            <p>Unit/Keb/PKS: {{ $unitPihakPertama }}</p>

            <h4>II. Data Pihak Kedua</h4>
            <p>Nama: {{ $namaPihakKedua }}</p>
            <p>Jabatan: {{ $jabatanPihakKedua }}</p>
            <p>Nomor HP: {{ $teleponPihakKedua }}</p>
            <p>Unit/Keb/PKS: {{ $unitPihakKedua }}</p>

            <p>Dalam hal ini disebut sebagai PIHAK PERTAMA (yang menyerahkan) dan PIHAK KEDUA (yang menerima).</p>

            <p>Dengan ini menyatakan bahwa PIHAK PERTAMA telah menyerahkan kepada PIHAK KEDUA dan PIHAK KEDUA telah menerima perangkat sebagai berikut:</p>

            <table>
                <thead>
                    <tr>
                        <th>Nama Barang</th>
                        <th>Type</th>
                        <th>Jumlah</th>
                        <th>Service Tag / SN</th>
                        <th>Keterangan</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($barang as $item)
                        <tr>
                            <td>{{ $item['namaBarang'] }}</td>
                            <td>{{ $item['typeBarang'] }}</td>
                            <td>{{ $item['jumlahBarang'] }}</td>
                            <td>{{ $item['snBarang'] }}</td>
                            <td>{{ $item['keteranganBarang'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <script>
                window.onload = function() {
                    window.print();
                };
            </script>

            <p>Sejak penandatanganan berita acara ini, maka barang tersebut menjadi tanggung jawab PIHAK KEDUA untuk dipergunakan sebagai alat kerja.</p>
            <div class="signature">
                <div>
                    <p>PIHAK PERTAMA</p>
                    <br><br><br>
                    <p>{{ $namaPihakPertama }}</p>
                </div>
                <div>
                    <p>PIHAK KEDUA</p>
                    <br><br><br>
                    <p>{{ $namaPihakKedua }}</p>
                </div>
            </div>
        </div>

        <div class="footer">
            <img src="{{ asset('assets/default/web/akhlak.png') }}" alt="akhlak"  style="width: 100px;">
        </div>
    </div>
</body>
</html>