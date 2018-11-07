@component('layouts.panelAdmin')
    @slot('content')
        <div class="container">
            <div class="card card-register mx-auto mt-5">
                <div class="card-header">Register an Account</div>
                <div class="card-body">
                    {{-- Formulario para el registro de usuario --}}
                    {!! Form::open(['route' => 'register', 'method'=> 'POST']) !!}

                        {!! Field::text('name', null, ['placeholder' => 'Enter name']) !!}
                        {!! Field::number('age', null, ['placeholder' => 'Enter age']) !!}
                        {!! Field::text('country', null, ['placeholder' => 'Enter country']) !!}
                        {!! Field::text('phone', null, ['placeholder' => 'Enter phone']) !!}

                        {!! Form::submit('Register', ['class' => 'btn btn-primary btn-block']) !!}
                    {!! Form::close() !!}
                    <div class="text-center">
                        <a class="d-block small mt-3" href="{{ route('login') }}">Login Page</a>
                    </div>
                </div>
            </div>
        </div>
    @endslot
    @slot('scripts')
        {!! Html::script('js/auth/default.js') !!}
    @endslot
@endcomponent
