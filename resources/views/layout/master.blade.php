<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>
<body class="bg-success">
  <div class="container-fluid">
    <h1 class="bg-danger">Universitas MDP</h1>
    <h1 class="bg-primary">@yield('subtitle')</h1>
    <hr>
    @yield('content')
    <hr>
    &copy; {{ date('Y') }} Universitas Multi Data Palembang
  </div>

</body>
</html>