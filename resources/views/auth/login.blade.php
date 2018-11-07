@component('layouts.panelAdmin')
    @slot('content')
        <div class="container">
            <div class="card card-login mx-auto mt-5">
                <div class="card-header">Login</div>
                <div class="card-body">
                    {!! Form::open(['route' => 'login', 'method'=> 'POST']) !!}
                        {!! Field::text('login', null, ['placeholder' => 'Enter name', 'id' => 'login', ]) !!}

                        {!! Form::submit('Login', ['class' => 'btn btn-primary btn-block']) !!}
                    {!! Form::close() !!}

                    <div class="text-center">
                        <a class="d-block small mt-3" href="{{ route('register') }}">Register an Account</a>
                    </div>
                </div>
            </div>
        </div>
    @endslot
    @slot('scripts')
        {!! Html::script('js/auth/default.js') !!}
    @endslot
@endcomponent