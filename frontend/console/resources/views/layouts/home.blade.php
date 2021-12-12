<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Dpavillon | Cari kos idaman kamu</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="/logo.png" rel="icon" />
    <link href="/logo.png" rel="apple-touch-icon" />

    @include('partials.meta')
</head>

<body>
    @include('partials.header')

    @include('partials.asside')

    <main id="main" class="main">
       @yield('content')
    </main>
    <!-- End #main -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

   @include('partials.js')
</body>

</html>