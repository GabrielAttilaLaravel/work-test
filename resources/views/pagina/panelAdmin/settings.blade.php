@component('pagina.panelAdmin.index')

    @slot('title', 'Settings')

    @slot('css')
        {!! Html::style('css/settings.css') !!}
    @endslot

    @slot('content')
        <div id="content">
            @component('pagina.panelAdmin.partials.header')
                @slot('title', 'General blog settings')
            @endcomponent

            <div class="content-inner">
                <div class="row">
                    <div class="col-md-6">
                        {!! Form::open(['route' => 'login', 'method'=> 'POST']) !!}
                            <div class="settings-row">
                                <h3>Site name</h3>
                                <p>This is permanetly shown on the top left corner of navigation</p>
                                {!! Field::text('site-name', ['required' => true]) !!}
                            </div>

                            <div class="settings-row">
                                <h3>Posts per page</h3>
                                <p>Control total number of blogs show on the blog index page.</p>
                                {!! Field::number('posts-page', 10, ['class' => 'small-input', 'min' => 5, 'required' => true]) !!}
                            </div>

                            <div class="settings-row">
                                <h3>Under maintenance</h3>
                                <p>Redirect all request to a holding page.</p>
                                <div class="checkbox">
                                    <label>
                                        {!! Field::checkbox('under-maintenance') !!}
                                        blog is under maintenance
                                    </label>
                                </div>
                            </div>

                            <div class="settings-row">
                                <h3>Prevent commenting</h3>
                                <p>Prevent or Enable visitors from leaving comments.</p>
                                {!! Field::select('prevent-commenting', ['active', 'disable'], 0, ['class' => 'small-input', 'empty' => false]) !!}
                            </div>

                            <div class="settings-row">
                                <h3>Tags visibility</h3>
                                <p>Enable or Disable tag visibility on all blog posts.</p>
                                {!! Field::select('tags-visibility', ['active', 'disable'], 0, ['class' => 'small-input', 'empty' => false]) !!}
                            </div>
                         {!! Form::submit('Save Settings', ['class' => 'btn btn-primary']) !!}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    @endslot

@endcomponent