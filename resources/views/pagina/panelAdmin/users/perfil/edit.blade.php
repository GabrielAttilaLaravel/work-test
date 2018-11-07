@component('pagina.panelAdmin.index')

    @slot('title', 'Perfil')

    @slot('css')
        {!! Html::style('css/perfil.css') !!}
    @endslot

    @slot('content')
        <div id="content">
            @component('pagina.panelAdmin.partials.header')
                @slot('title', 'Perfil')
            @endcomponent
            <div class="content-inner">
                <div class="card">
                    <div class="form-wrapper">
                        {!! Form::open(['route' => 'login', 'method'=> 'POST']) !!}
                            {!! Field::text('usermane', $user->name, ['ph' => 'Enter name', 'readonly' => true]) !!}

                            {!! Field::number('age', $user->age, ['ph' => 'Enter age' , 'readonly' => true]) !!}

                            {!! Field::text('pais', $user->pais->nameP, ['ph' => 'Enter name country', 'readonly' => true]) !!}

                            {!! Field::text('phone', $user->phone, ['ph' => 'Enter phone', 'readonly' => true]) !!}

                            <div id="ip" class="form-control form-group" readonly></div>
                            <div id="browser" class="form-control form-group" readonly></div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    @endslot
    @slot('scripts')
        <script src="http://code.jquery.com/jquery-latest.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bowser/1.9.4/bowser.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
        <script>
            document.getElementById('browser').innerHTML = bowser.name+' '+bowser.version;

            $.getJSON('https://ipapi.co/json/', function(data) {
                document.getElementById('ip').innerHTML = data.ip;
            });
        </script>

    @endslot
@endcomponent