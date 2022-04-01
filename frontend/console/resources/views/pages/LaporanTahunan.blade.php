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
                <td>{{ 'Rp ' . number_format($income['januari'], 0, ',', '.') }}</td>
                <td>{{ 'Rp ' . number_format($outcome['januari'], 0, ',', '.') }}</td>
            </tr>
            <tr>
                <th scope="row">Februari</th>
                <td>{{ 'Rp ' . number_format($income['februari'], 0, ',', '.') }}</td>
                <td>{{ 'Rp ' . number_format($outcome['februari'], 0, ',', '.') }}</td>
            </tr>
            <tr>
                <th scope="row">Meret</th>
                <td>{{ 'Rp ' . number_format($income['maret'], 0, ',', '.') }}</td>
                <td>{{ 'Rp ' . number_format($outcome['maret'], 0, ',', '.') }}</td>
            </tr>
            <tr>
                <th scope="row">April</th>
                <td>{{ 'Rp ' . number_format($income['april'], 0, ',', '.') }}</td>
                <td>{{ 'Rp ' . number_format($outcome['april'], 0, ',', '.') }}</td>
            </tr>
            <tr>
                <th scope="row">Mei</th>
                <td>{{ 'Rp ' . number_format($income['mei'], 0, ',', '.') }}</td>
                <td>{{ 'Rp ' . number_format($outcome['mei'], 0, ',', '.') }}</td>
            </tr>
            <tr>
                <th scope="row">Juni</th>
                <td>{{ 'Rp ' . number_format($income['juni'], 0, ',', '.') }}</td>
                <td>{{ 'Rp ' . number_format($outcome['juni'], 0, ',', '.') }}</td>
            </tr>
            <tr>
                <th scope="row">Juli</th>
                <td>{{ 'Rp ' . number_format($income['juli'], 0, ',', '.') }}</td>
                <td>{{ 'Rp ' . number_format($outcome['juli'], 0, ',', '.') }}</td>
            </tr>
            <tr>
                <th scope="row">Agustus</th>
                <td>{{ 'Rp ' . number_format($income['agustus'], 0, ',', '.') }}</td>
                <td>{{ 'Rp ' . number_format($outcome['agustus'], 0, ',', '.') }}</td>
            </tr>
            <tr>
                <th scope="row">September</th>
                <td>{{ 'Rp ' . number_format($income['september'], 0, ',', '.') }}</td>
                <td>{{ 'Rp ' . number_format($outcome['september'], 0, ',', '.') }}</td>
            </tr>
            <tr>
                <th scope="row">Oktober</th>
                <td>{{ 'Rp ' . number_format($income['oktober'], 0, ',', '.') }}</td>
                <td>{{ 'Rp ' . number_format($outcome['oktober'], 0, ',', '.') }}</td>
            </tr>
            <tr>
                <th scope="row">November</th>
                <td>{{ 'Rp ' . number_format($income['november'], 0, ',', '.') }}</td>
                <td>{{ 'Rp ' . number_format($outcome['november'], 0, ',', '.') }}</td>
            </tr>
            <tr>
                <th scope="row">Desember</th>
                <td>{{ 'Rp ' . number_format($income['desember'], 0, ',', '.') }}</td>
                <td>{{ 'Rp ' . number_format($outcome['desember'], 0, ',', '.') }}</td>
            </tr>
            <tr>
                <th scope="row">Total</th>
                <td>{{ 'Rp ' . number_format($income['total'], 0, ',', '.') }}</td>
                <td>{{ 'Rp ' . number_format($outcome['total'], 0, ',', '.') }}</td>
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
