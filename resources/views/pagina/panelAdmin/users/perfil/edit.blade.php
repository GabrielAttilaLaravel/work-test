@component('pagina.panelAdmin.index')

    @slot('title', 'Perfil')

    @slot('css')
        {!! Html::style('css/perfil.css') !!}
    @endslot

    @slot('content')
        <div id="content">
            @component('pagina.panelAdmin.partials.header')
                @slot('title', 'Perfil')

                @slot('button_create')
                    @include('pagina.panelAdmin.partials.button_create', [
                         'route' => adminRoute().'company_create',
                         'value' => 'Register your company'
                     ])
                @endslot
            @endcomponent
            <div class="content-inner">
                <div class="card">
                    <div class="form-wrapper">
                       <div class="perfil-image ">
                            <img class="rounded-circle d-none d-sm-block mx-auto d-block" src="{{ asset('img/user.jpg') }}" alt="">
                        </div>
                        {!! Form::open(['route' => 'login', 'method'=> 'POST']) !!}
                            <div class="custom-file">
                                {!! Field::file('file',['lang' => 'es', 'class'=>'custom-file-input','id'=>'validatedCustomFile', 'required' => true]) !!}
                                <label class="custom-file-label" for="validatedCustomFile">
                                    Select file
                                </label>
                            </div>
                            {!! Field::text('usermane', null, ['placeholder' => 'Username']) !!}

                            {!! Field::text('email', null, ['placeholder' => 'Email']) !!}

                            {!! Field::text('first_name', null, ['placeholder' => 'First name']) !!}

                            {!! Field::text('last_name', null, ['placeholder' => 'Last name']) !!}

                            {!! Field::text('country', null, ['placeholder' => 'Country']) !!}

                            {!! Field::text('address', null, ['placeholder' => 'Address']) !!}

                            {!! Field::text('phone', null, ['placeholder' => 'Phone']) !!}

                            {!! Form::submit('Save', ['class' => 'btn btn-primary float-right submit']) !!}

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    @endslot

@endcomponent