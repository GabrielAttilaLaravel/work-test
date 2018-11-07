<!-- side menu -->
<div class="content-perfil-image">
    <div class="perfil-image ">
        <img class="rounded-circle d-none d-sm-block mx-auto d-block" src="{{ asset('img/familia.jpg') }}" alt="">
    </div>
    <a href="{{ route('admin_dashboard') }}" class="text-center">
        <span>Gabriel Moreno</span>
    </a>
    <div class="row m-0 justify-content-md-center">
        <div class="role col-md-auto">Admin</div>
    </div>
</div>

<ul>
    <li class="link @if(ROUTE::is(['admin_users_index'])) active @endif">
        <a href="{{ route('admin_users_index') }}">
            <i class="fas fa-users" aria-hidden="true"></i>
            <span class="d-none d-lg-inline">Users</span>
        </a>
    </li>
</ul>