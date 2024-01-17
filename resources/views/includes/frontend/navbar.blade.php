<nav class="navbar navbar-expand-lg">
    <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <a class="navbar-brand  {{ (request()->is('/')) ? 'active' : '' }}" href="{{ url('/') }}">
            <img src="{{ asset('frontend/images/greennobg.png') }}" alt="Dietify Logo" width="141" height="45">
        </a>

        @guest
        <div class="d-lg-none">
            <a href="{{ url('login') }}" class="bi-person custom-icon me-3"></a>
        </div>
        @endguest

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link {{ (request()->is('/')) ? 'active' : '' }}" href="{{ url('/') }}">Home</a>
                </li>


                <li class="nav-item">
                    <a class="nav-link {{ (request()->is('program')) ? 'active' : '' }}" href="{{ url('program') }}">Program</a>
                </li>

                <li class="nav-item">
                    @if(isset($userProgram) && $userProgram && $userProgram->diet_schedule_id)
                        <a class="nav-link {{ (request()->is('schedule/*')) ? 'active' : '' }}" href="{{ route('schedule', ['dietTypeId' => $userProgram->diet_schedule_id]) }}">Jadwal</a>
                    @else
                        <a class="nav-link disabled" href="#">Jadwal (Daftar Program terlebih dahulu)</a>
                    @endif
                </li>
            </ul>

            @guest
            <div class="d-none d-lg-block">
                <a href="{{ url('login') }}" class="bi-person custom-icon"></a>
            </div>
            @endguest

            @auth
            {{-- dropdown profile and logout --}}
            <div class="dropdown">
                {{-- name --}}
                <a class="bi-person custom-icon" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                   Hi, {{ Auth::user()->name }}!
                </a>
                {{-- arrow down --}}
                <a class="bi-caret-down custom-icon" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false"></a>

                {{-- dropdown menu --}}

                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <li><a class="dropdown-item" href="{{ url('profile') }}">Profile</a></li>
                    <li>
                        <form action="{{ url('logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="dropdown-item">Logout</button>
                        </form>
                    </li>
                </ul>
            </div>
            @endauth
        </div>
    </div>
</nav>
