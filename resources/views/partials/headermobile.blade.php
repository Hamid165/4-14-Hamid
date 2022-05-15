<header class="header-mobile d-block d-lg-none">
    <div class="header-mobile__bar">
        <div class="container-fluid">
            <div class="header-mobile-inner">
                <a class="logo" href="/home">
                    <img src="images/icon/1.jpg" alt="HamidSabirin" />
                </a>
                <button class="hamburger hamburger--slider" type="button">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
    </div>
    <nav class="navbar-mobile">
        <div class="container-fluid">
            <ul class="navbar-mobile__list list-unstyled">
                <li class="has-sub">
                    <a class="js-arrow" href="/home">
                        <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                <li>
                    <a href="{{ route('contacts.index') }}">
                        <i class="fas fa-chart-bar"></i>Pesan</a>
                </li>
            </ul>
        </div>
    </nav>
</header>