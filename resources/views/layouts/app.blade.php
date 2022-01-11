<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Car Flipper</title>
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body class="bg-light">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid ms-5">
      <a class="navbar-brand" href="{{ route('index') }}">Car Flipper</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          
        </ul>
        <ul class="navbar-nav my-auto">
          @auth
          <li class="nav-item mr-4 mb-2">
            <a class="btn btn-success me-3" href="{{ route('advertisement') }}">Create Ad</a>
          </li>
          
          <li class="nav-item">
            <form action="{{ route('logout') }}" method="post">
              @csrf
              <button class="btn btn-outline-primary me-md-2" type="submit">Logout</button>
            </form>
          </li>
          @endauth

          @guest
            <li class="nav-item">
              <a class="nav-link text-dark" href="{{ route('login') }}">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark" href="{{ route('register') }}">Register</a>
            </li>
          @endguest
        </ul>
      </div>
    </div>
  </nav>
  @yield('content')

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>