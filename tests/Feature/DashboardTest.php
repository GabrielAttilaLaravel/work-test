<?php

namespace Tests\Feature;

use Tests\TestCase;

class DashboardTest extends TestCase
{
    /** Queremos que los administradores puedan visitar el tablero administrativo */
    function test_admins_can_visit_the_admin_dashboard()
    {
        // creamos un usuario administrador y lo logeamos
        $this->actingAsAdmin()
            // nos vamos a la ruta admin_dashboard
            ->get(route('admin_dashboard'))
            // Como somos admin deberia cargar correctamente la pagina
            ->assertStatus(200)
            // Y deberiamos ver el texto "Panel de Administración"
            ->assertSee('Panel de Administración');
    }

    /** Los usuarios que no sean administradores no podrán visitar el tablero administrativo */
    function test_non_admin_users_cannot_visit_the_admin_dashboard()
    {
        // creamos un usuario y lo logeamos
        $this->actingAsUser()
            // nos vamos a la ruta admin_dashboard
            ->get(route('admin_dashboard'))
            // Nos devolvera un status 403 "Forbidden - acceso restringido"
            ->assertStatus(403);
    }

    /** Los usuarios anonimos no podran visitar el tablero administrativo */
    function test_guests_cannot_visit_the_admin_dashboard()
    {
        // nos vamos a la ruta admin_dashboard
        $this->get(route('admin_dashboard'))
            // como no estamos logeados nos redirigira
            ->assertStatus(302)
            // deberiamos ver la pagina de login
            ->assertRedirect('login');
    }
}
