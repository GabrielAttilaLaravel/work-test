@component('pagina.panelAdmin.index')

    @slot('title', 'Users')

    @slot('css')
        {!! Html::style('css/users.css') !!}
    @endslot

    @slot('content')
        <div id="content">
            @component('pagina.panelAdmin.partials.header')
                @slot('title', 'All users')
            @endcomponent

            <div class="content-inner">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th class="d-none d-md-block">Phone</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $user->name }}</td>
                                <td class="d-none d-md-block">{{ $user->phone }}</td>
                                <td class="actions-color">
                                    <button type="button" class="btn btn-xs btn-primary"><a href="{{ route('admin_user_perfil_edit', $user) }}">show</a></button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
                {{ $users->render() }}
        </div>
    @endslot

@endcomponent