@component('layouts.panelAdmin')

    @slot('title')
        {{ $title or 'Panel Admin'}}
    @endslot

    @slot('css')
        {{ $css or ''}}
    @endslot

    @slot('content')
        <div class="col-2 d-none d-sm-block display-table-cell collapse" id="side-menu">
            @include('pagina.panelAdmin.partials.site-menu', ['admin' => auth()->user()->isAdmin() ? 'admin_': false])
        </div>
        <div class="col-10 display-table-cell" id="main-content">
            @include('pagina.panelAdmin.partials.main-content')
            {{ $content or ''}}
        </div>
    @endslot

    @slot('scripts')
        {{ $scripts or ''}}
    @endslot
@endcomponent