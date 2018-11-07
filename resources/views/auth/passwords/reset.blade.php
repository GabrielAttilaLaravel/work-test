@component('layouts.panelAdmin')
    @slot('content')
        <div class="container">
            <div class="card card-register mx-auto mt-5">
                <div class="card-header">Reset Password</div>
                <div class="card-body">
                    {!! Form::open(['route' => 'password.request', 'method'=> 'POST']) !!}

                        {!! Field::hidden('token', $token) !!}
                        {!! Field::email('email', null, ['placeholder' => 'Enter email address']) !!}
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

                        {!! Form::submit('Reset Password', ['class' => 'btn btn-primary btn-block']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    @endslot
    @slot('scripts')
        {!! Html::script('js/auth/default.js') !!}
    @endslot
@endcomponent
