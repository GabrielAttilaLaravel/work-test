@component('pagina.panelAdmin.index')

    @slot('title', 'Articles')

    @slot('css')
        {!! Html::style('css/new-article.css') !!}
    @endslot

    @slot('content')
        <div id="content">
            @component('pagina.panelAdmin.partials.header')
                @slot('title', 'All articles')

                @slot('button_create')
                    <button type="button" class="btn-create btn btn-xs btn-primary float-right">Create new article</button>
                @endslot
            @endcomponent

            <div class="content-inner">
                @include('pagina.panelAdmin.partials.search')
                <div class="row container-fluid">
                    <div class="col-xs-2 col-sm-1 col-md-1 col-lg-1 status-padding">
                        <span class="badge badge-success badge-sm">Active</span>
                    </div>

                    <div class="col-xs-10 col-sm-6 col-md-6 col-lg-8 article-title">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
                        <small>Created 15th August 2018</small>
                    </div>

                    <div class="col-xs-10 col-sm-5 col-md-5 col-lg-3">
                        <div class="actions article-actions">
                            <a href="" class="btn btn-xs btn-default" role="button">
                                <i class="fas fa-times" aria-hidden="true">&nbsp;Delete</i>
                            </a>


                            <a href="" class="btn btn-xs btn-default" role="button">
                                <i class="fas fa-pencil-alt" aria-hidden="true">&nbsp;Edit</i>
                            </a>

                            <a href="" class="btn btn-xs btn-default" role="button">
                                <i class="fas fa-folder-open" aria-hidden="true">&nbsp;View</i>
                            </a>
                        </div>
                    </div>
                </div>

                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <nav aria-label="...">
                            <ul class="pagination">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1">Previous</a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item active">
                                    <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">Next</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    @endslot

@endcomponent