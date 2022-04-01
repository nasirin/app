<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Lampiran laporan bulanan</title>

</head>

<body>
    <table class="table ">
        <thead>
            <tr class="text-center">
                <th colspan="3">LAPORAN BULANAN</th>
            </tr>
            <tr class="text-center">
                <th colspan="3">{{ date('M Y') }}</th>
            </tr>
            <tr>
                <th scope="col"></th>
                <th scope="col">Booking</th>
                <th scope="col">Kebutuhan</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">Pemasukan</th>
                <td>{{ 'Rp ' . number_format($income, 0, ',', '.') }}</td>
                <td></td>
            </tr>
            <tr>
                <th scope="row">Pengeluaran</th>
                <td></td>
                <td>{{ 'Rp ' . number_format($outcome, 0, ',', '.') }}</td>
            </tr>
            <tr>
                <th scope="row">Total</th>
                <td colspan="2">{{ 'Rp ' . number_format($income - $outcome, 0, ',', '.') }}</td>
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
