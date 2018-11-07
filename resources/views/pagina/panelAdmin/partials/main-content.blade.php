<div class="row">
    <header id="nav-header" class="w-100">
        <div class="row">
            <div class="col-md-12">
                <ul class="float-right">
                    <li class="mr-3  d-none d-md-block welcome">Welcome to your administration area</li>
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