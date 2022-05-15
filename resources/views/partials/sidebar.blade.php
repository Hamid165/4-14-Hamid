<aside class="menu-sidebar d-none d-lg-block">
    <div class="logo">
        <a href="#">
            <img src="{{asset('admin/images/icon/logo.png')}}" width="150px" alt="Hamid" />
        </a>
    </div>
    <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">
                <li class="active has-sub">
                    <a class="js-arrow" href="/home">
                        <i class="fas fa-tachometer-alt"></i>Home</a>
                </li>
                <li>
                    <a href="{{ route('contacts.index') }}">
                        <i class="fas fa-chart-bar"></i>Pesan</a>
                </li>

            </ul>
        </nav>
    </div>
</aside>