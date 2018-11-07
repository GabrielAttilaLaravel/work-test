@component('pagina.panelAdmin.index')

    @slot('title', 'Tags')

    @slot('css')
        {!! Html::style('css/tags.css') !!}
    @endslot

    @slot('content')
        <div class="row">
            <div class="col-md-4 dashboard-left-cell">
                <div class="admin-content-con">
                    <header>
                        <h5>Create tags</h5>
                    </header>

                    {!! Form::open(['route' => 'login', 'method'=> 'POST']) !!}

                        <label for="tags"> Add comma separated tags below</label>
                        {!! Field::textarea('tags', ['ph' => 'e.g. coding, css, php, laravel', 'class' => 'summernote', 'rows' => 3 ]) !!}

                        {!! Form::submit('Save Tags', ['class' => 'btn btn-primary btn-lg btn-block']) !!}
                    {!! Form::close() !!}
                </div>
            </div>

            <div class="col-md-8 dashboard-right-cell">
                <div class="admin-content-con">
                    <header>
                        <h5>Tags</h5>
                    </header>

                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Status</th>
                                <th class="d-none d-sm-block">Created</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>php</td>
                                <td><span class="badge badge-success">in use</span></td>
                                <td class="d-none d-sm-block" >2 days ago</td>
                                <td class="actions-color">
                                    <button type="button" class="btn btn-xs btn-warning">edit</button>
                                    <button type="button" class="btn btn-xs btn-danger disabled">delete</button>
                                </td>
                            </tr>

                            <tr>
                                <td>laravel</td>
                                <td><span class="badge badge-dark">not used</span></td>
                                <td class="d-none d-sm-block">4 days ago</td>
                                <td class="actions-color">
                                    <button type="button" class="btn btn-xs btn-warning">edit</button>
                                    <button type="button" class="btn btn-xs btn-danger">delete</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    @endslot

@endcomponent