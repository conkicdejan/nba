<nav class="navbar navbar-expand-lg text-bg-dark mb-1">
    <h3 class="px-3 mb-0  text-white" href="#">NBA</h3>
    <div class="container-fluid">
      @auth
        <div class="navbar-nav">
          <a class="nav-link text-white" href="/">Teams</a>
        </div>
        <div class="navbar-nav">
          <span class="nav-link text-white">{{ Auth::user()->name }}</span>
          <a class="nav-link text-white" href="/logout">Logout</a>
        </div>
      @endauth
      @guest
        <div class="navbar-nav">
        </div>
        <div class="navbar-nav">
          <a class="nav-link text-white" href="/login">Login</a>
          <a class="nav-link text-white" href="/register">Register</a>
        </div>
      @endguest
    </div>
  </nav>