@component('pagina.panelAdmin.index')

    @slot('title', 'Comments approved')

    @slot('css')
        {!! Html::style('css/comments/comments.css') !!}
    @endslot

    @slot('content')
        <div id="content">
            @component('pagina.panelAdmin.partials.header')
                @slot('title', 'All approved')

                @slot('button_create')
                    @include('pagina.panelAdmin.partials.button_create', [
                        'route' => 'admin_article_create',
                        'value' => 'Create new article'
                    ])
                @endslot
            @endcomponent

            <div class="content-inner">
                @include('pagina.panelAdmin.partials.search')

                <div class="row comments-row align-items-center">
                    <div class="col-sm-2 col-md-2 col-lg-2 content-image">
                        <img class="rounded-circle d-none d-sm-block mx-auto d-block" src="https://api.fnkr.net/testimg/70x70/00ced1/fff/?text=70x70" alt="">
                    </div>

                    <div class="col-sm-10 col-md-10 col-lg-10">
                        <div class="row">
                            <div class="col-9 col-sm-9 col-md-9">
                                <b>kingsley ijomah</b> posted message on <b>How things are made...</b><br>
                                <small>Today 12:42 am - 05/08/2018</small>
                            </div>

                            <div class="col-3 col-sm-3 col-md-3">
                                <div class="cleatfix">
                                    <div class="float-right comment-age">12 days ago</div>
                                </div>
                            </div>

                            <div class="card card-sm comments-card">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam in ipsum gravida,
                                maximus mauris tincidunt, rhoncus turpis. Etiam ac velit mi. Vestibulum sagittis
                                dignissim lacus, ut euismod massa.
                            </div>

                            <div class="col-md-12 clearfix mt-4">
                                <div class="float-right">
                                    <a href="" class="btn btn-default" role="button">
                                        <i class="fas fa-thumbs-down" aria-hidden="true"></i>
                                        Un-approved
                                    </a>
                                    <a href="" class="btn btn-default" role="button">
                                        <i class="fas fa-times" aria-hidden="true"></i>
                                        Delete
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <hr>

                <div class="row comments-row align-items-center">
                    <div class="col-sm-2 col-md-2 col-lg-2 content-image">
                        <img class="rounded-circle d-none d-sm-block mx-auto d-block" src="https://api.fnkr.net/testimg/70x70/00ced1/fff/?text=70x70" alt="">
                    </div>

                    <div class="col-sm-10 col-md-10 col-lg-10">
                        <div class="row">
                            <div class="col-9 col-sm-9 col-md-9">
                                <b>kingsley ijomah</b> posted message on <b>How things are made...</b><br>
                                <small>Today 12:42 am - 05/08/2018</small>
                            </div>

                            <div class="col-3 col-sm-3 col-md-3">
                                <div class="cleatfix">
                                    <div class="float-right comment-age">12 days ago</div>
                                </div>
                            </div>

                            <div class="card card-sm comments-card">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam in ipsum gravida,
                                maximus mauris tincidunt, rhoncus turpis. Etiam ac velit mi. Vestibulum sagittis
                                dignissim lacus, ut euismod massa.
                            </div>

                            <div class="col-md-12 clearfix mt-4">
                                <div class="float-right">
                                    <a href="" class="btn btn-default" role="button">
                                        <i class="fas fa-thumbs-down" aria-hidden="true"></i>
                                        Un-approved
                                    </a>
                                    <a href="" class="btn btn-default" role="button">
                                        <i class="fas fa-times" aria-hidden="true"></i>
                                        Delete
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endslot

@endcomponent