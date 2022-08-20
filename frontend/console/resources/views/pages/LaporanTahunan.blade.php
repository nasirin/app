<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Lampiran laporan tahunan</title>
</head>

<body>
    <table class="table ">
        <thead>
            <tr class="text-center">
                <th colspan="3">LAPORAN TAHUNAN</th>
            </tr>
            <tr class="text-center">
                <th colspan="3">{{ date('Y') }}</th>
            </tr>
            <tr>
                <th scope="col">Bulan</th>
                <th scope="col">Booking</th>
                <th scope="col">Kebutuhan</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">Januari</th>
                <td>{{ 'Rp ' . number_format($januari['booking'], 0, ',', '.') }}</td>
                <td>{{ 'Rp ' . number_format($januari['kebutuhan'], 0, ',', '.') }}</td>
            </tr>
            <tr>
                <th scope="row">Februari</th>
                <td>{{ 'Rp ' . number_format($februari['booking'], 0, ',', '.') }}</td>
                <td>{{ 'Rp ' . number_format($februari['kebutuhan'], 0, ',', '.') }}</td>
            </tr>
            <tr>
                <th scope="row">Meret</th>
                <td>{{ 'Rp ' . number_format($maret['booking'], 0, ',', '.') }}</td>
                <td>{{ 'Rp ' . number_format($maret['kebutuhan'], 0, ',', '.') }}</td>
            </tr>
            <tr>
                <th scope="row">April</th>
                <td>{{ 'Rp ' . number_format($april['booking'], 0, ',', '.') }}</td>
                <td>{{ 'Rp ' . number_format($april['kebutuhan'], 0, ',', '.') }}</td>
            </tr>
            <tr>
                <th scope="row">Mei</th>
                <td>{{ 'Rp ' . number_format($mei['booking'], 0, ',', '.') }}</td>
                <td>{{ 'Rp ' . number_format($mei['kebutuhan'], 0, ',', '.') }}</td>
            </tr>
            <tr>
                <th scope="row">Juni</th>
                <td>{{ 'Rp ' . number_format($juni['booking'], 0, ',', '.') }}</td>
                <td>{{ 'Rp ' . number_format($juni['kebutuhan'], 0, ',', '.') }}</td>
            </tr>
            <tr>
                <th scope="row">Juli</th>
                <td>{{ 'Rp ' . number_format($juli['booking'], 0, ',', '.') }}</td>
                <td>{{ 'Rp ' . number_format($juli['kebutuhan'], 0, ',', '.') }}</td>
            </tr>
            <tr>
                <th scope="row">Agustus</th>
                <td>{{ 'Rp ' . number_format($agustus['booking'], 0, ',', '.') }}</td>
                <td>{{ 'Rp ' . number_format($agustus['kebutuhan'], 0, ',', '.') }}</td>
            </tr>
            <tr>
                <th scope="row">September</th>
                <td>{{ 'Rp ' . number_format($september['booking'], 0, ',', '.') }}</td>
                <td>{{ 'Rp ' . number_format($september['kebutuhan'], 0, ',', '.') }}</td>
            </tr>
            <tr>
                <th scope="row">Oktober</th>
                <td>{{ 'Rp ' . number_format($oktober['booking'], 0, ',', '.') }}</td>
                <td>{{ 'Rp ' . number_format($oktober['kebutuhan'], 0, ',', '.') }}</td>
            </tr>
            <tr>
                <th scope="row">November</th>
                <td>{{ 'Rp ' . number_format($november['booking'], 0, ',', '.') }}</td>
                <td>{{ 'Rp ' . number_format($november['kebutuhan'], 0, ',', '.') }}</td>
            </tr>
            <tr>
                <th scope="row">Desember</th>
                <td>{{ 'Rp ' . number_format($desember['booking'], 0, ',', '.') }}</td>
                <td>{{ 'Rp ' . number_format($desember['kebutuhan'], 0, ',', '.') }}</td>
            </tr>
            <tr>
                <th scope="row">Total</th>
                <td>{{ 'Rp ' . number_format($total['booking'], 0, ',', '.') }}</td>
                <td>{{ 'Rp ' . number_format($total['pengeluaran'], 0, ',', '.') }}</td>
            </tr>
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script>
        window.print()
    </script>
</body>

</html>
