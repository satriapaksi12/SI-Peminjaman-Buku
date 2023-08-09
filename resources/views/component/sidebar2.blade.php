<div class="sidebar-menu">
    <ul class="menu">
        <li class="sidebar-title">Menu</li>

        <li class="sidebar-item active ">
            <a href="/dashboard" class='sidebar-link'>
                <i class="bi bi-grid-fill"></i>
                <span>Dashboard</span>
            </a>
        </li>
        @if (Auth::user()->role_id == 1)
            <li class="sidebar-item  ">
                <a href="/periode" class='sidebar-link'>
                    <i class="bi bi-calendar3"></i>
                    <span>Pinjam Buku</span>
                </a>
            </li>
            <li class="sidebar-item  ">
                <a href="/periode" class='sidebar-link'>
                    <i class="bi bi-calendar3"></i>
                    <span>Daftar Pinjam Buku</span>
                </a>
            </li>
            <li class="sidebar-title">Kelola Data Master</li>

            <li class="sidebar-item  ">
                <a href="/periode" class='sidebar-link'>
                    <i class="bi bi-calendar3"></i>
                    <span>Kelola Kategori Buku</span>
                </a>
            </li>
            <li class="sidebar-item  ">
                <a href="/periode" class='sidebar-link'>
                    <i class="bi bi-calendar3"></i>
                    <span>Kelola Buku</span>
                </a>
            </li>
            <li class="sidebar-item  ">
                <a href="/sesi" class='sidebar-link'>
                    <i class="bi bi-clock"></i>
                    <span>Kelola Peminjaman Buku</span>
                </a>
            </li>
            <li class="sidebar-item  has-sub">
                <a href="#" class='sidebar-link'>
                    <i class="bi bi-people-fill"></i>
                    <span>Kelola User</span>
                </a>
                <ul class="submenu ">
                    <li class="submenu-item ">
                        <a href="/user"> User Aktif</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="/user-deleted"> User Non Aktif</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="/role"> Role</a>
                    </li>
                </ul>
            </li>
        @elseif (Auth::user()->role_id == 2)
        <li class="sidebar-item  ">
            <a href="/periode" class='sidebar-link'>
                <i class="bi bi-calendar3"></i>
                <span>Pinjam Buku</span>
            </a>
        </li>
        <li class="sidebar-item  ">
            <a href="/periode" class='sidebar-link'>
                <i class="bi bi-calendar3"></i>
                <span>Daftar Pinjam Buku</span>
            </a>
        </li>
        <li class="sidebar-title">Kelola Data Master</li>


        <li class="sidebar-item  ">
            <a href="/periode" class='sidebar-link'>
                <i class="bi bi-calendar3"></i>
                <span>Kelola Buku</span>
            </a>
        </li>
        <li class="sidebar-item  ">
            <a href="/sesi" class='sidebar-link'>
                <i class="bi bi-clock"></i>
                <span>Kelola Peminjaman Buku</span>
            </a>
        </li>
        @elseif (Auth::user()->role_id == 3)
        <li class="sidebar-item  ">
            <a href="/periode" class='sidebar-link'>
                <i class="bi bi-calendar3"></i>
                <span>Pinjam Buku</span>
            </a>
        </li>
        <li class="sidebar-item  ">
            <a href="/periode" class='sidebar-link'>
                <i class="bi bi-calendar3"></i>
                <span>Daftar Pinjam Buku</span>
            </a>
        </li>
        @endif

    </ul>
</div>
