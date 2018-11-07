@component('layouts.panelAdmin')
    @slot('content')
        <div class="container">
            <div class="card card-register mx-auto mt-5">
                <div class="card-header">Register an Account</div>
                <div class="card-body">
                    {!! Form::open(['route' => 'register', 'method'=> 'POST']) !!}

                        <label for="username">User name</label>
                        {!! Field::text('username', null, ['placeholder' => 'Enter username']) !!}

                        <div class="form-row">
                            <div class="col-md-6">
                                <label for="first_name">First name</label>
                                {!! Field::text('first_name', null, ['placeholder' => 'Enter first name']) !!}
                            </div>
                            <div class="col-md-6">
                                <label for="last_name">Last name</label>
                                {!! Field::text('last_name', null, ['placeholder' => 'Enter last name']) !!}
                            </div>
                        </div>

                        <label for="login">Email address</label>
                        {!! Field::email('email', null, ['placeholder' => 'Enter email']) !!}

                        <div class="form-row">
                            <div class="col-md-6">
                                <label for="password">Password</label>
                                {!! Field::password('password', ['placeholder' => 'Enter password']) !!}
                            </div>
                            <div class="col-md-6">
                                <label for="password">Confirm password</label>
                                {!! Field::password('password_confirmation', ['placeholder' => 'Enter Confirm password']) !!}
                            </div>
                        </div>

                        {!! Form::submit('Register', ['class' => 'btn btn-primary btn-block']) !!}
                    {!! Form::close() !!}
                    <div class="text-center">
                        <a class="d-block small mt-3" href="{{ route('login') }}">Login Page</a>
                        <a class="d-block small" href="{{ route('password.request') }}">Forgot Password?</a>
                    </div>
                </div>
            </div>
        </div>
    @endslot
    @slot('scripts')
        {!! Html::script('js/auth/default.js') !!}
    @endslot
@endcomponent
