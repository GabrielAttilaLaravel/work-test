<?php

namespace Tests\Traits;


use App\Models\{
    Perfil, Role, User, Admin
};

trait TestsHelper
{
    protected $defaultUser;
    protected $userAdmin;

    protected function createAdmin()
    {
        $admin = factory(User::class)->create([
            'role_id' => $this->createRole('admin')->id
        ]);

        factory(Perfil::class)->create([
            'user_id' => $admin->id
        ]);
        return $admin;
    }

    // creamos un usuario y lo retornamos
    public function defaultUser(array $attributes = [])
    {
        // nos aseguramos si el user fue creado
        if ($this->defaultUser){
            return $this->defaultUser;
        }

        $user = factory(User::class)->create($attributes);

        factory(Perfil::class)->create([
            'user_id' => $user->id
        ]);

        return $user;
    }

    protected function createRole($role)
    {
        $rol = Role::where('nombreR', $role)->first();

        if (!$rol){
            $rol = factory(Role::class)->create([
                'nombreR' => $role
            ]);

            return $rol;
        }
        return $rol;
    }

    public function actingAsAdmin($admin = null)
    {
        if ($admin == null){
            $admin = $this->createAdmin();
        }

        return $this->actingAs($admin);
    }

    public function actingAsUser($user = null)
    {
        if ($user == null){
            $user = factory(User::class)->create();
        }

        return $this->actingAs($user);
    }
}