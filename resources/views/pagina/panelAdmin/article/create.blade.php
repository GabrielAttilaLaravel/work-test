@component('pagina.panelAdmin.index')

    @slot('title', 'Create Article')

    @slot('css')
        {!! Html::style('css/new-article.css') !!}
        <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
        {!! Html::style('lib/summernote-0.8.9-dist/dist/summernote.css') !!}
    @endslot

    @slot('content')
        <div id="content">
            @component('pagina.panelAdmin.partials.header')
                @slot('title', 'Create new article')
            @endcomponent
            <div class="content-inner">
                <div class="card">
                    <div class="form-wrapper">
                        {!! Form::open(['route' => 'login', 'method'=> 'POST']) !!}
                            {!! Field::text('title', null, ['placeholder' => 'Title', 'id' => 'title']) !!}

                            {!! Field::select('tags', array('html', 'css', 'coding', 'programing'), ['multiple' => true, 'class' => 'chosen-select']) !!}

                            {!! Field::textarea('article', ['ph' => 'Article', 'class' => 'summernote' ]) !!}

                            {!! Form::checkboxes('publish', ['publish' => 'publish article when I click on save']) !!}

                            {!! Form::submit('Save / Publish', ['class' => 'btn btn-primary float-right submit']) !!}

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    @endslot

    @slot('scripts')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
        {!! Html::script('lib/summernote-0.8.9-dist/dist/summernote.js') !!}
        <script>
            $(document).ready(function() {
                // Personalizando el textarea
                $('.summernote').summernote({
                    height: 200,
                    placeholder: "Article"
                });

                $('.chosen-select').select2({
                    placeholder: "Select tags"
                });
            });
        </script>
    @endslot
@endcomponent