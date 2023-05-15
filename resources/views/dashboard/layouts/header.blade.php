<nav
    class="header-navbar navbar-expand-lg navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-dark navbar-shadow">
    <div class="navbar-wrapper">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mobile-menu d-lg-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs"
                        href="#"><i class="ft-menu font-large-1"></i></a></li>
                <li class="nav-item mr-auto"><a class="navbar-brand" href="index.html"><img class="brand-logo"
                            alt="" src="{{ asset('img/Pertamina.png') }}">
                        <h3 class="brand-text">Pertamina</h3>
                    </a></li>
                <li class="nav-item d-none d-lg-block nav-toggle"><a class="nav-link modern-nav-toggle pr-0"
                        data-toggle="collapse"><i class="toggle-icon ft-toggle-right font-medium-3 white"
                            data-ticon="ft-toggle-right"></i></a></li>
                <li class="nav-item d-lg-none"><a class="nav-link open-navbar-container" data-toggle="collapse"
                        data-target="#navbar-mobile"><i class="la la-ellipsis-v"></i></a></li>
            </ul>
        </div>
        <div class="navbar-container content">
            <div class="collapse navbar-collapse" id="navbar-mobile">
                <ul class="nav navbar-nav mr-auto float-left">
                    <li class="nav-item d-none d-lg-block">
                        <a class="nav-link nav-link-expand" href="#">
                            <i class="ficon ft-maximize"></i>
                        </a>
                    </li>
                </ul>
                <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown"><span
                        class="mr-1 user-name text-bold-700"></span>
                    <span class="avatar avatar-online"><img src="{{ asset('img/undraw_profile_1.svg') }}"
                            alt="avatar">
                    </span>
                </a>
                <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#"><i
                            class="ft-user"></i> Edit Profile</a><a class="dropdown-item" href="{{ route('homepage')}}"><i
                            class="ft-clipboard"></i> Main Page</a>
                    <div class="dropdown-divider"></div>
                    <form action="/auth/logout" method="POST" >
                        @csrf
                        <button class="dropdown-item" type="submit"><i class="ft-power"></i> Logout</button>
                    </form>
                </div>
                </ul>
            </div>
        </div>
    </div>
</nav>
