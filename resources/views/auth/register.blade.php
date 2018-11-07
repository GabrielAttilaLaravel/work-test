@component('layouts.panelAdmin')
    @slot('content')
        <div class="container">
            <div class="card card-register mx-auto mt-5">
                <div class="card-header">Register an Account</div>
                <div class="card-body">
                    {{-- Formulario para el registro de usuario --}}
                    {!! Form::open(['route' => 'register', 'method'=> 'POST', 'onsubmit' => "return validacion()"]) !!}

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
        {{-- Color de fondo --}}
        {!! Html::script('js/auth/default.js') !!}

        <script>
            // Declaramos un array con los IDs de los div del form que tienen los campos en grupos
            var field = Array('field_name', 'field_age');
            // declaramos un array con el cual vamos adherir un elemento div
            var fields = new Array();
            // recorremos con un for la variable que contienen los IDs de los campos en grupos del
            // formulario
            for (var i = 0; i < field.length ; i++) {
                // creamos un elemento div
                var newDiv = document.createElement("div");
                // obtenemos el div done esta el input(campo) en el cual vamos adherir
                // el div para la validacion a dado caso de error
                fields[i] = document.getElementById(field[i])
                // adherimos el elemento div
                fields[i].appendChild(newDiv);
                // agregamos texto al div
                fields[i].lastChild.textContent = "The age field is required.";
                // le damos una clase al div
                fields[i].lastChild.className = 'invalid-feedback';
            }

            // funcion que valida los campos del formulario
            // Nota: acá valido solo los campos name y age los otros 2 campos los valida laravel
            // esto con la intencion de decirles que no seria necesrio crear este codigo para
            // la validacion, laravel practicamente lo hace solo pro de igual forma podemos
            // personalizar las reglas de validación
            function validacion() {
                // obtenemos el valor del campo name y age
                var name = document.getElementById("name").value;
                var age = document.getElementById("age").value;

                // verificamos si el campo name contiene datos y que no sean nulos y que sea
                // de tipo string
                // y para el age que contenta datos que no sean nulos y que sea intero
                if( name == null || name.length == 0 || /^\s+$/.test(name) ) {
                    fields[0].lastChild.style = 'display:block';

                    return false;
                }else if( age == null || age.length == 0 || isNaN(age) ) {
                    fields[1].lastChild.style = 'display:block';

                    return false;
                }
            }
        </script>
    @endslot
@endcomponent
