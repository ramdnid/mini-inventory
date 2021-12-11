<nav class="navbar top-navbar navbar-expand-md navbar-light">
    <div class="navbar-header">
        <a class="navbar-brand" href="{{route('user.index')}}">
            <h2 style="font-weight: bold; color: lightskyblue; padding-left: 20px;">STAFF ADMIN</h2>
            {{-- <b>
                <img src="{{url('admin/frontend/template/assets/images/logo-icon.png')}}" alt="homepage" class="dark-logo" />
                <!-- Light Logo icon -->
                <img src="{{url('admin/frontend/template/assets/images/logo-light-icon.png')}}" alt="homepage" class="light-logo" />
            </b>
            <span>
                <img src="{{url('admin/frontend/template/assets/images/logo-text.png')}}" alt="homepage" class="dark-logo" />
                <img src="{{url('admin/frontend/template/assets/images/logo-light-text.png')}}" class="light-logo" alt="homepage" />
            </span> --}}
        </a>
    </div>
    <div class="navbar-collapse">
        <ul class="navbar-nav me-auto" style="height: 80px;">
            
        </ul>
        <ul class="navbar-nav my-lg-0">
            <li class="nav-item dropdown u-pro">
                <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </li>
        </ul>
    </div>
</nav>