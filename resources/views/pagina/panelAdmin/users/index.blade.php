@component('pagina.panelAdmin.index')

    @slot('title', 'Users')

    @slot('css')
        {!! Html::style('css/users.css') !!}
    @endslot

    @slot('content')
        <div id="content">
            @component('pagina.panelAdmin.partials.header')
                @slot('title', 'All users')

                @slot('button_create')
                    @include('pagina.panelAdmin.partials.button_create', [
                         'route' => 'admin_article_create',
                         'value' => 'Create new article'
                     ])
                @endslot
            @endcomponent



            <div class="content-inner">
                @include('pagina.panelAdmin.partials.search')
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Full Name</th>
                            <th class="d-none d-md-block">Email</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Gabriel Moreno</td>
                            <td class="d-none d-md-block">abc123@gmail.com</td>
                            <td class="actions-color">
                                <button type="button" class="btn btn-xs btn-primary">show</button>
                                <button type="button" class="btn btn-xs btn-warning">edit</button>
                                <button type="button" class="btn btn-xs btn-danger">delete</button>
                            </td>
                        </tr>

                        <tr>
                            <td>2</td>
                            <td>Milagros Silva</td>
                            <td class="d-none d-md-block">abc234@gmail.com</td>
                            <td class="actions-color">
                                <button type="button" class="btn btn-xs btn-primary">show</button>
                                <button type="button" class="btn btn-xs btn-warning">edit</button>
                                <button type="button" class="btn btn-xs btn-danger disabled">delete</button>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <table class="table table-hover d-block d-sm-none">
                    <tr>
                        <td class="col-1 table-title"><b>#</b></td>
                        <td class="col-11">1</td>
                    </tr>
                    <tr>
                        <td class="table-title"><b>Full Name</b></td>
                        <td>Gabriel Moreno</td>
                    </tr>
                    <tr>
                        <td class="table-title"><b>Email</b></td>
                        <td>abc234@gmail.com</td>
                    </tr>
                    <tr>
                        <td class="table-title"><b>Actions</b></td>
                        <td class="actions-color">
                            <button type="button" class="btn btn-xs btn-primary">show</button>
                            <button type="button" class="btn btn-xs btn-warning">edit</button>
                            <button type="button" class="btn btn-xs btn-danger disabled">delete</button>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    @endslot

@endcomponent