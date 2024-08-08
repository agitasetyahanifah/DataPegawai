<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item {{ request()->is('pegawai*') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('pegawai.index') }}">
                <i class="icon-head menu-icon"></i>
                <span class="menu-title">Data Pegawai</span>
            </a>
        </li>
    </ul>
</nav>
