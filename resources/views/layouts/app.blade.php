<!DOCTYPE html>
<link rel="stylesheet" href="/css/navbar.css">
<!-- Header -->
<header>
  <nav class="navbar navbar-dark bg-primary">
    <a class="navbar-brand" href="/home">Reddit-ish</a>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav flex-row">
        <li class="nav-item h-100 active">
          <a class="nav-link px-5" style="font-size: 14px; margin-right: 20px" href="/home">Home</a>
        </li>
        @if (Auth::check())
        <!-- Display logout button for authenticated users -->
        <li class="nav-item h-100">
          <form method="POST" action="/logout">
            @csrf
            <button type="submit" class="nav-link px-5" style="font-size: 14px">Logout</button>
          </form>
        </li>
        @else
          <!-- Display login and registration buttons for guest users -->
          <li class="nav-item h-100">
            <a class="nav-link px-5" style="font-size: 14px; margin-right: 20px" href="/login">Login</a>
          </li>
          <li class="nav-item h-100">
            <a class="nav-link px-5" style="font-size: 14px" href="/register">Register</a>
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
