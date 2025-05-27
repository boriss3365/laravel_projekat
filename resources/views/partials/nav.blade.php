
<nav class="navbar navbar-expand-sm bg-dark navbar-light">
  <div class="container-fluid">
    <ul class="navbar-nav">
    {{--
     <li class="nav-item">
        <a class="nav-link" href="{{route('home')}}">Pocetna</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('about')}}">O nama</a>
      </li>
      --}}

      <li class="nav-item">
        <a class="nav-link" style="color: white;" href="{{route('home')}}">Pocetna</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" style="color: white;" href="{{route('katalog')}}">Katalog</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" style="color: white;" href="{{route('kontakt')}}">Kontakt</a>
      </li>

      <span class="position-absolute top-50 start-50 translate-middle text-white fw-bold" style="font-size: 20px;">
        Hemijska Čistionica
      </span>

        @auth
            <li class="nav-item ms-auto d-flex align-items-center">
                <span class="nav-link fw-bold text-white mb-0">Zdravo {{ Auth::user()->name }}</span>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="nav-link btn btn-link text-white p-0 m-0">Logout</button>
                </form>

                <a class="nav-link text-white" href="{{ route('profile.edit') }}">Moj profil</a>
            </li>
        @endauth


        <ul class="navbar-nav">
            @guest
                <li class="nav-item" style="padding-left: 985px;">
                    <a class="nav-link text-white" href="{{ route('login') }}">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('register') }}">Sign Up</a>
                </li>
            @endguest


        </ul>

    </ul>
  </div>
</nav>
