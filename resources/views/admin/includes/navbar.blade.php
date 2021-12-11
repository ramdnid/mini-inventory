<nav class="navbar top-navbar navbar-expand-md navbar-light">
    <div class="navbar-header">
        <a class="navbar-brand" href="{{url('superadmin')}}">
            <h2 style="font-weight: bold; color: lightskyblue; padding-left: 4px; font-size: 18px;">SUPER ADMINISTRATOR</h2>
        </a>
    </div>
    <div class="navbar-collapse">
        <ul class="navbar-nav me-auto">
            <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up waves-effect waves-dark"
                    href="javascript:void(0)"><i class="fa fa-bars"></i></a> </li>
            <li class="nav-item hidden-xs-down search-box"> <a
                    class="nav-link hidden-sm-down waves-effect waves-dark" href="javascript:void(0)"><i
                        class="fa fa-search"></i></a>
                <form class="app-search">
                    <input type="text" class="form-control" placeholder="Search & enter"> <a
                        class="srh-btn"><i class="fa fa-times"></i></a></form>
            </li>
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