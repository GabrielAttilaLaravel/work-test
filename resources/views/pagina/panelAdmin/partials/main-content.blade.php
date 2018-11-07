<div class="row">
    <header id="nav-header" class="w-100">
        <div class="row">
            <div class="col-md-3">
                <nav class="navbar-default navbar-dark float-left d-block d-sm-none">
                    <button class="navbar-toggler collapsed" type="button" data-toggle="offcanvas" data-target="#side-menu" aria-controls="side-menu">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </nav>
                <input type="text" class="d-none d-lg-block" id="header-search-field"  placeholder="Search for Something...">
            </div>
            <div class="col-md-9">
                <ul class="float-right">
                    <li class="mr-3  d-none d-md-block welcome">Welcome to your administration area</li>
                    <li class="fixed-width">
                        <a href="">
                            <i class="fas fa-bell" aria-hidden="true"></i>
                            <span class="badge badge-warning">4</span>
                        </a>
                    </li>
                    <li class="fixed-width">
                        <a href="">
                            <i class="fas fa-envelope" aria-hidden="true"></i>
                            <span class="badge badge-success">4</span>
                        </a>
                    </li>
                    <li >
                        <a class="logout" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="fas fa-sign-out-alt" aria-hidden="true"></i>
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </header>
</div>
<!-- Footer -->
<div class="row">
    @include('pagina.panelAdmin.partials.footer')
</div>