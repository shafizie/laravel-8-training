<li class="nav-item dropdown no-caret dropdown-user me-3 me-lg-4">
    <a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="navbarDropdownUserImage" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img class="img-fluid" src="{{ asset('assets') }}/img/illustrations/profiles/profile-1.png" /></a>
    <div class="dropdown-menu dropdown-menu-end border-0 shadow animated--fade-in-up" aria-labelledby="navbarDropdownUserImage">
        <h6 class="dropdown-header d-flex align-items-center">
            <img class="dropdown-user-img" src="{{ asset('assets') }}/img/illustrations/profiles/profile-1.png" />
            <div class="dropdown-user-details">
                <div class="dropdown-user-details-name">{{ Auth::user()->name }}</div>
                <div class="dropdown-user-details-email">{{ Auth::user()->email }}</div>
            </div>
        </h6>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="{{ route('profile') }}">
            <div class="dropdown-item-icon"><i data-feather="settings"></i></div>
            Account
        </a>
        <!-- <a class="dropdown-item" href="#!">
            <div class="dropdown-item-icon"><i data-feather="log-out"></i></div>
            Logout
        </a> -->
        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <div class="dropdown-item-icon"><i data-feather="log-out"></i></div>
            {{ __('Logout') }}
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </div>
</li>
