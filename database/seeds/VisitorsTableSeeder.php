<?php

use Illuminate\Database\Seeder;

class VisitorsTableSeeder extends Seeder
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

        foreach ($users as $user){
            factory(\App\Models\Visitor::class)->create([
                'user_id' => $user->id
            ]);
        }
    }
}
