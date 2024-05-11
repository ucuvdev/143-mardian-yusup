<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route('dashboard') }}">SIZAKI</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ route('dashboard') }}">SZ</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="nav-item dropdown">
                <a href="{{ route('dashboard') }}" class="nav-link">
                    <i class="fas fa-fire"></i><span>Dashboard</span>
                </a>
            </li>

            <li class="menu-header">Main Menu</li>
            <li>
                <a class="nav-link" href="{{ route('penerimaan') }}">
                    <i class="fas fa-file-signature"></i>
                    <span>Penerimaan Zakat</span>
                </a>
            </li>
            <li>
                <a class="nav-link" href="{{ route('penyaluran') }}">
                    <i class="fas fa-hand-holding-heart"></i>
                    <span>Penyaluran Zakat</span>
                </a>
            </li>

            <li class="menu-header">Master Data</li>
            <li>
                <a class="nav-link" href="{{ route('data-warga') }}">
                    <i class="fas fa-users"></i>
                    <span>Data Warga</span>
                </a>
            </li>
            <li>
                <a class="nav-link" href="{{ route('data-asnaf') }}">
                    <i class="fas fa-user-tag"></i>
                    <span>Data Asnaf</span>
                </a>
            </li>

            <li class="menu-header">Pengaturan</li>
            <li>
                <a class="nav-link" href="{{ route('profil-upz') }}">
                    <i class="fas fa-university"></i>
                    <span>Profil UPZ</span>
                </a>
            </li>
            <li>
                <a class="nav-link" href="{{ route('pengguna') }}">
                    <i class="fas fa-users-cog"></i>
                    <span>Pengguna</span>
                </a>
            </li>
        </ul>
    </aside>
</div>
