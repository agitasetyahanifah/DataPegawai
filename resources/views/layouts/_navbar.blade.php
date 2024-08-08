<nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
        <a class="navbar-brand brand-logo me-5" href="#">
            <img src="{{ asset('assets/images/logo1.png') }}" class="me-2" alt="logo" />
            <b>Company</b>
        </a>
        <a class="navbar-brand brand-logo-mini" href="#"><img style="width: 35px" src="{{ asset('assets/images/logo1.png') }}" alt="logo" /></a>
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="icon-menu"></span>
        </button>
        <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item nav-profile dropdown">
                <a class="nav-link dropdown-toggle p-0 d-flex align-items-center" href="#" data-bs-toggle="dropdown" id="profileDropdown">
                    <h5 class="mb-0 me-2">Agita Setya Hanifah</h5>
                    <img src="{{ asset('assets/images/faces/profile.png') }}" alt="profile" class="rounded-circle" style="width: 40px; height: 40px;" />
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                    <a class="dropdown-item">
                        <i class="ti-settings text-primary"></i>
                        Settings
                    </a>
                    <a class="dropdown-item">
                        <i class="ti-power-off text-primary"></i>
                        Logout
                    </a>
                </div>
            </li>
        </ul>
    </div>
</nav>
