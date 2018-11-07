@component('pagina.panelAdmin.index')

    @slot('title', 'Dashboard')

    @slot('css')
        {!! Html::style('css/dashboard.css') !!}
    @endslot

    @slot('content')
        <div id="dashboard-con">
            <div class="row">
                <div class="col-md-6 dashboard-left-cell">
                    <div class="admin-content-con">
                        @component('pagina.panelAdmin.partials.header')
                            @slot('title', 'Articles')

                            @slot('button_create')
                                @include('pagina.panelAdmin.partials.button_create', [
                                    'route' => 'admin_article_create',
                                    'value' => 'Create new article'
                                ])
                            @endslot
                        @endcomponent

                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>title</th>
                                    <th class="replies">replies</th>
                                    <th class="date">date</th>
                                    <th>actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>This is the first post of many to come....</td>
                                    <td class="replies">20</td>
                                    <td class="date">2 days ago</td>
                                    <td class="actions-color">
                                        <button type="button" class="btn btn-xs btn-primary">show</button>
                                        <button type="button" class="btn btn-xs btn-warning edit">edit</button>
                                        <button type="button" class="btn btn-xs btn-danger delete">delete</button>
                                    </td>
                                </tr>

                                <tr>
                                    <td>This is the first post of many to come....</td>
                                    <td class="replies">20</td>
                                    <td class="date">2 days ago</td>
                                    <td class="actions-color">
                                        <button type="button" class="btn btn-xs btn-primary">show</button>
                                        <button type="button" class="btn btn-xs btn-warning edit">edit</button>
                                        <button type="button" class="btn btn-xs btn-danger delete">delete</button>
                                    </td>
                                </tr>

                                <tr>
                                    <td>This is the first post of many to come....</td>
                                    <td class="replies">20</td>
                                    <td class="date">2 days ago</td>
                                    <td class="actions-color">
                                        <button type="button" class="btn btn-xs btn-primary">show</button>
                                        <button type="button" class="btn btn-xs btn-warning edit">edit</button>
                                        <button type="button" class="btn btn-xs btn-danger delete">delete</button>
                                    </td>
                                </tr>

                                <tr>
                                    <td>This is the first post of many to come....</td>
                                    <td class="replies">20</td>
                                    <td class="date">2 days ago</td>
                                    <td class="actions-color">
                                        <button type="button" class="btn btn-xs btn-primary">show</button>
                                        <button type="button" class="btn btn-xs btn-warning edit">edit</button>
                                        <button type="button" class="btn btn-xs btn-danger delete">delete</button>
                                    </td>
                                </tr>

                                <tr>
                                    <td>This is the first post of many to come....</td>
                                    <td class="replies">20</td>
                                    <td class="date">2 days ago</td>
                                    <td class="actions-color">
                                        <button type="button" class="btn btn-xs btn-primary">show</button>
                                        <button type="button" class="btn btn-xs btn-warning edit">edit</button>
                                        <button type="button" class="btn btn-xs btn-danger delete">delete</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="clearfix">
                            <a href="{{ route('admin_article_index') }}" class="float-right text-link"> view all articles</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 dashboard-right-cell">
                    <div class="admin-content-con">
                        @component('pagina.panelAdmin.partials.header')
                            @slot('title', 'Comments')
                        @endcomponent

                        <div class="comment-head-dash clearfix">
                            <div class="commenter-name-dash float-left">Kingsly Ijomah</div>
                            <div class="days-dash float-right">2 days go</div>
                        </div>

                        <p class="comment-dash">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam in ipsum gravida,
                            maximus mauris tincidunt, rhoncus turpis. Etiam ac velit mi. Vestibulum sagittis
                            dignissim lacus, ut euismod massa.
                        </p>
                        <small class="comment-date-dash">Today 5:10pm 06/08/2018</small>
                        <hr>

                        <div class="comment-head-dash clearfix">
                            <div class="commenter-name-dash float-left">Kingsly Ijomah</div>
                            <div class="days-dash float-right">2 days go</div>
                        </div>

                        <p class="comment-dash">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam in ipsum gravida,
                            maximus mauris tincidunt, rhoncus turpis. Etiam ac velit mi. Vestibulum sagittis
                            dignissim lacus, ut euismod massa.
                        </p>
                        <small class="comment-date-dash">Today 5:10pm 06/08/2018</small>
                        <hr>
                        <div class="clearfix">
                            <a href="{{ route('admin_comments_approved') }}" class="float-right text-link"> view all comments</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="admin-content-con clearfix">
                        @component('pagina.panelAdmin.partials.header')
                            @slot('title', 'Users')
                        @endcomponent

                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Full Name</th>
                                        <th class="d-none d-sm-table-cell">Email</th>
                                        <th class="d-none d-xl-table-cell">Status</th>
                                        <th class="d-none d-lg-table-cell">Created</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Gabriel Moreno</td>
                                        <td class="d-none d-sm-table-cell">abc123@gmail.com</td>
                                        <td class="d-none d-xl-table-cell"><span class="badge badge-success">active</span></td>
                                        <td class="d-none d-lg-table-cell">06/08/2018</td>
                                        <td class="actions-color">
                                            <button type="button" class="btn btn-xs btn-primary">show</button>
                                            <button type="button" class="btn btn-xs btn-danger delete">delete</button>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>2</td>
                                        <td>Gabriel Moreno</td>
                                        <td class="d-none d-sm-table-cell">abc123@gmail.com</td>
                                        <td class="d-none d-xl-table-cell"><span class="badge badge-success">active</span></td>
                                        <td class="d-none d-lg-table-cell">06/08/2018</td>
                                        <td class="actions-color">
                                            <button type="button" class="btn btn-xs btn-primary">show</button>
                                            <button type="button" class="btn btn-xs btn-danger delete">delete</button>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>3</td>
                                        <td>Gabriel Moreno</td>
                                        <td class="d-none d-sm-table-cell">abc123@gmail.com</td>
                                        <td class="d-none d-xl-table-cell"><span class="badge badge-success">active</span></td>
                                        <td class="d-none d-lg-table-cell">06/08/2018</td>
                                        <td class="actions-color">
                                            <button type="button" class="btn btn-xs btn-primary">show</button>
                                            <button type="button" class="btn btn-xs btn-danger delete">delete</button>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>4</td>
                                        <td>Gabriel Moreno</td>
                                        <td class="d-none d-sm-table-cell">abc123@gmail.com</td>
                                        <td class="d-none d-xl-table-cell"><span class="badge badge-dark">pending</span></td>
                                        <td class="d-none d-lg-table-cell">06/08/2018</td>
                                        <td class="actions-color">
                                            <button type="button" class="btn btn-xs btn-primary">show</button>
                                            <button type="button" class="btn btn-xs btn-danger delete">delete</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                    </div>
                </div>
            </div>
        </div>
    @endslot

@endcomponent