<!DOCTYPE html>
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" >
  <link rel="stylesheet" href="/css/navbar.css">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
  <style>
    body {
      margin-top: 70px; /* without this the navbar overlaps with the create post button */
    }
  </style>
</head>
<!-- Header -->
<header>
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="/home">Reddit-ish</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto align-items-center">
        <li class="nav-item active">
          <a class="nav-link" href="/home">Home</a>
        </li>
      @if (Auth::check())
        <!-- Display logout button for authenticated users -->
        <li class="nav-item">
          <form method="POST" action="/logout">
            @csrf
            <button type="submit" class="btn btn-link nav-link">Logout</button>
          </form>
        </li>
      @else
        <!-- Display login and registration buttons for guest users -->
        <li class="nav-item">
          <a class="nav-link" href="/login">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/register">Register</a>
        </li>
      @endif
      </ul>
    </div>
  </nav>
</header>
<!-- Content -->
<body>
    @yield('content')
</body>
<!-- Footer -->
<footer class="bg-primary py-3 mt-5">
    <div class="container text-center">
        <p class="text-white m-0">Some sort of copyright thing</p>
    </div>
</footer>
</html>