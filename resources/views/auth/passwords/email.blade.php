@component('layouts.panelAdmin')

    @slot('content')
        <div class="container">
            <div class="card card-login mx-auto mt-5">
                {!! Alert::render() !!}
                @include('errors.partials.errors')
                <div class="card-header">Reset Password</div>
                <div class="card-body">
                    <div class="text-center mt-4 mb-5">
                        <h4>Forgot your password?</h4>
                        <p>Enter your email address and we will send you instructions on how to reset your password.</p>
                    </div>
                    {!! Form::open(['route' => 'password.email', 'method'=> 'POST']) !!}

                        {!! Field::email('email', null, ['placeholder' => 'Enter email address']) !!}
                        {!! Form::submit('Reset Password', ['class' => 'btn btn-primary btn-block']) !!}

                    {!! Form::close() !!}
                    <div class="text-center">
                        <a class="d-block small mt-3" href="{{ route('register') }}">Register an Account</a>
                        <a class="d-block small" href="{{ route('login') }}">Login Page</a>
                    </div>
                </div>
            </div>
        </div>
    @endslot
    @slot('scripts')
        {!! Html::script('js/auth/default.js') !!}
    @endslot
@endcomponent
