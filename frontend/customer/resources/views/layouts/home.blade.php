<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dpavillon</title>
  <meta content="rumah indekos idaman di semarang" name="description">
  <meta content="indekos" name="keywords">

  <!-- Favicons -->
  <link href="/logo.png" rel="icon">
  <link href="/logo.png" rel="apple-touch-icon">

  @include('partials.head')
</head>

<body>

  @include('partials.search')
  @include('partials.navbar')
  @yield('intro')

  <main id="main">

    @yield('content')

  </main><!-- End #main -->
  @include('partials.footer')

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  @include('partials.js')

</body>

</html>