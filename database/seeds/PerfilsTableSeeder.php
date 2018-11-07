<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class PerfilsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // obtenermos todos los usuarios registrados
        $users = \App\Models\User::all();
        // creamos un objeto para obtener el año
        $date = Carbon::now();
        $year = $date->year;

        // registramos para cada usuario su año de nacimiento
        foreach ($users as $user){

            $year_birth = $year - $user->age;

            $user->perfil()->create([
                'year_birth' => $year_birth
            ]);
        }
    }
}
