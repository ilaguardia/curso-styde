<?php

namespace Tests\Feature;

use App\Models\User;
use App\Models\Profession;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Testing\RefreshDatabase;
// use Illuminate\Foundation\Testing\DatabaseMigrations; // sustituye a RefreshDatabase - pendiente revisar esto que parece que no tiene nada que ver.
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UsersModuleTest extends TestCase {

    // **** Tarda un huevo, lo quito de momento. Volver a añadirlo al acabar de trastear con las pruebas
    use RefreshDatabase; //Recrea la bd con los migrations que existen. Si ha habido cambios los aplica.

// use DatabaseMigrations;  // Se supone que esto sustituye a refresh, pero al final parece que no.

    protected function setUp(): void {
        parent::setUp();
        $this->artisan("db:seed");

        /* Artisan::call('db:seed', [
          '--class' => ThemesTableSeeder::class
          ]);  // Averiguar como funciona */
    }

    /**
     * A basic feature test example.
     *
     * @test
     */
    public function it_shows_the_users_list() {

        $profession = Profession::factory()->count(5)->create();

        // dd($profession);

        User::factory()->create([
            'name' => 'Joel',
            'profession_id' => rand(1, 5),
        ]);

        User::factory()->create([
            'name' => 'Ellie',
            'profession_id' => rand(1, 5),
        ]);

        // dd($profession);

        $response = $this->get('/usuarios');
        $response->assertStatus(200);
        $response->assertSee('Listado de Usuarios', true);
        $response->assertSee('Joel', true);
        $response->assertSee('Ellie', true);
    }

    /** @test */
    public function it_shows_the_user_detail() {
        $profession = Profession::factory()->count(5)->create();

        // dd($profession);

        $user = User::factory()->create([
            'name' => 'Gerry',
            'profession_id' => rand(1, 5),
        ]);

        // dd($profession);

        /* $user = User::factory()->create([
          'name' => 'Duilio Palacios',
          'profession_id' => rand(1,5),
          ]); */



        $response = $this->get('/usuarios/' . $user->id); // selecciono el nombre de usuario que acabo de crear */
        $response->assertStatus(200);
        $response->assertSee("Detalle del usuario #{$user->id}", true);
        $response->assertSee($user->name);
        $response->assertSee($user->profession_id);
    }

    /** @test */
    public function it_shows_no_user_detail() {

        DB::table('users')->truncate();
        // Pedimos un usuario ramdom en una tabla vacía
        $response = $this->get('/usuarios' . rand(100, 105));

        // dd($response);

        $response->assertStatus(404);
        $response->assertSee('Página no encontrada');
    }

    /** @test */
    public function it_shows_no_users_list() {

        DB::table('users')->truncate();

        // Al truncar la table ya no hace falta que comparemos con empty
        // $response = $this->get('/usuarios?empty');
        $response = $this->get('/usuarios');

        // dd($response);

        $response->assertStatus(200);
        $response->assertSee('No hay usuarios registrados', true);
    }

    /** @test */
    public function it_loads_the_new_users_page() {
        $response = $this->get('/usuarios/nuevo');

        $response->assertStatus(200);
        $response->assertSee('Crear usuario nuevo', true);
    }

    /** @test */
    public function it_creates_a_new_user() {
        // $this->withoutExceptionHandling();

        $this->post(route('users.store'), [
            'name' => 'Duilio',
            'email' => 'duilio@email.com',
            'password' => '123456'
        ])->assertRedirect(route('users'));

        $this->assertDatabaseHas('users', [
            'name' => 'Duilio',
            'email' => 'duilio@email.com',
                // 'password' => '1234'
        ]);

        /* // Para que no pete con la contraseña (que la encripta cada vez distinto, se usa el otro método
         *  $this->assertDatabaseHas('users', [
          'name' => 'Duilio',
          'email' => 'duilio@email.com',
          'password' => '1234'
          ]); */

        // solo funciona con la tabla por defecto
        $this->assertCredentials([
            'name' => 'Duilio',
            'email' => 'duilio@email.com',
            'password' => '123456'
        ]);

        // $response->assertStatus(200);
    }

    /** @test */
    public function name_is_required_in_form_new_users() {
        DB::table('users')->truncate();

        // $this->withoutExceptionHandling();

        $this->from(route('users.create'))
                ->post('/usuarios', [
                    'name' => '',
                    'email' => 'duilio@otroemail.com',
                    'password' => '1234'
                ])
                ->assertRedirect(route('users.create'))
                ->assertSessionHasErrors('name')
                ->assertSessionHasErrors([
                    'name' => 'Este campo es obligatorio'
                ])

        /* ->assertSessionHasErrors([
          'name' => 'The name field is required.'
          ]) */ // Los mensajes error estándar están en resources/lang/en/validation.php
        ;

        // Comprueba que no se ha creado ese usuario
        $this->assertDatabaseMissing('users', [
            'email' => 'duilio@otroemail.com',
        ]);

        // Comprueba que no hay ningún usuario dado de alta
        $this->assertEquals(0, User::count());
    }

    /** @test */
    public function email_is_required_in_form_new_users() {
        if (DB::table('users')->count() > 0) {
            DB::table('users')->truncate();

            // dd($this);
        }

        // $this->withoutExceptionHandling();

        $this->from(route('users.create'))
                ->post('/usuarios', [
                    'name' => 'Duilio',
                    'email' => '',
                    'password' => '1234'
                ])
                ->assertRedirect(route('users.create'))
                ->assertSessionHasErrors('email')
                ->assertSessionHasErrors([
                    'email' => 'Este campo es obligatorio'
                ])
        ;

        // Comprueba que no se ha creado ese usuario
        $this->assertDatabaseMissing('users', [
            'name' => 'Duilio',
        ]);

        // Comprueba que no hay ningún usuario dado de alta
        $this->assertEquals(0, User::count());
    }

    /** @test */
    public function email_must_be_valid_in_form_new_users() {
        // $this->withoutExceptionHandling();

        $this->from(route('users.create'))
                ->post('/usuarios', [
                    'name' => 'Duilio',
                    'email' => 'correo-no-valido',
                    'password' => '1234'
                ])
                ->assertRedirect(route('users.create'))
                ->assertSessionHasErrors('email')
        /* ->assertSessionHasErrors([
          'email' => 'Este campo es obligatorio'
          ]) */ // Mirar mensajes de error para esto
        ;

        // Comprueba que no se ha creado ese usuario
        $this->assertDatabaseMissing('users', [
            'name' => 'Duilio',
        ]);
    }

    /** @test */
    public function email_must_be_unique_in_form_new_users() {
        DB::table('users')->truncate();

        // $this->withoutExceptionHandling();

        User::factory()->create([
            'email' => 'email-unique@new-users.net',
        ]);

        $this->from(route('users.create'))
                ->post('/usuarios', [
                    'name' => 'Duilio',
                    'email' => 'email-unique@new-users.net',
                    'password' => '1234'
                ])
                ->assertRedirect(route('users.create'))
                ->assertSessionHasErrors('email')
                ->assertSessionHasErrors([
                    'email' => 'Ya existe un usuario con ese email'
                ])
        ;

        // Comprueba que se ha creado ese usuario
        $this->assertDatabaseHas('users', [
            'email' => 'email-unique@new-users.net',
        ]);

        // Comprueba que solo hay un usuario dado de alta
        $this->assertEquals(1, User::count());
    }

    /** @test */
    public function password_is_required_in_form_new_users() {
        // $this->withoutExceptionHandling();

        $this->from(route('users.create'))
                ->post('/usuarios', [
                    'name' => 'Duilio',
                    'email' => 'duilio@otroemail.com',
                    'password' => ''
                ])
                ->assertRedirect(route('users.create'))
                ->assertSessionHasErrors('password')
                ->assertSessionHasErrors([
                    'password' => 'Este campo es obligatorio'
        ]);

        // Comprueba que no se ha creado ese usuario
        $this->assertDatabaseMissing('users', [
            'name' => 'Duilio',
        ]);

        // Comprueba que no hay ningún usuario dado de alta
        // $this->assertEquals(0, User::count());
    }

    /** @test */
    public function it_loads_the_edit_users_page() {

        // $this->withoutExceptionHandling(); // para desactivar el control de errores y ver el error en el test

        $user = User::factory()->create([
            'email' => 'duilio@styde.net',
        ]);

        // $this->get('/usuarios/editar', ['id' => $user->id]) // Esto genera una url tal que: /usuarios/editar?id=12
        $this->get("/usuarios/{$user->id}/editar") // Esto geneal una url tal que: /usuarios/12/editar
                ->assertStatus(200)
                ->assertSee('Editar usuario ' . $user->id, true)
                ->assertViewHas('user', $user)
                ->assertViewHas('user', function ($viewUser) use ($user) {      // si por alguna razón la assert de arriba no funcionara usaríamos esta. Pero parece que si funciona.
                    return $viewUser->id === $user->id;
                });
    }

    /** @test */
    public function it_updates_a_new_user() {
        $user = User::factory()->create([
            'email' => 'duilio@styde.net',
        ]);

        // $this->withoutExceptionHandling();

        $credentials = [
            'name' => 'Duilio',
            'email' => 'duilio@email.com',
            'password' => '123456'
        ];

        $this->put("/usuarios/{$user->id}", $credentials)
                ->assertRedirect(route('users.show', ['user' => $user])); // Comprueba si después del put hace bien la redirección

        $this->assertCredentials($credentials); // Comprueba si los nuevos campos están
        // $response->assertStatus(200);
    }

    /** @test */
    public function name_is_required_when_updating_a_user() {
        $user = User::factory()->create([
            'email' => 'name@isrequired.net',
        ]);

        // $this->withoutExceptionHandling();

        $credentials = [
            'name' => '',
            'email' => 'name@email.com',
            'password' => '123456'
        ];

        $this->from(route('users.edit', ['user' => $user]))
                ->put(route('users.update', ['user' => $user]), $credentials)
                ->assertRedirect(route('users.edit', ['user' => $user])) // Comprueba si después del put hace bien la redirección
                ->assertSessionHasErrors('name')
                ->assertSessionHasErrors([
                    'name' => 'Este campo es obligatorio'
        ]);

        $this->assertDatabaseMissing('users', $credentials); // Comprueba que un registro con los datos nuevos no existe
    }

    /** @test */
    public function email_is_required_when_updating_a_user() {
        $user = User::factory()->create([
            'email' => 'email@isrequired.net',
        ]);

        // $this->withoutExceptionHandling();

        $credentials = [
            'name' => 'Duilio',
            'email' => '',
            'password' => '123456'
        ];

        $this->from(route('users.edit', ['user' => $user]))
                ->put(route('users.update', ['user' => $user]), $credentials)
                ->assertRedirect(route('users.edit', ['user' => $user])) // Comprueba si después del put hace bien la redirección
                ->assertSessionHasErrors('email')
                ->assertSessionHasErrors([
                    'email' => 'Este campo es obligatorio'
        ]);

    }

    /** @test */
    public function email_must_be_valid_when_updating_the_user() {
        $user = User::factory()->create([
            'name' => 'Nombre inicial email valid Updating User',
        ]);

        // $this->withoutExceptionHandling();

        $credentials = [
            'name' => 'Nombre actualizado email valid Updating User',
            'email' => 'correo-no-valido',
            'password' => '123456'
        ];

        $this->from(route('users.edit', ['user' => $user]))
                ->put(route('users.update', ['user' => $user]), $credentials)
                ->assertRedirect(route('users.edit', ['user' => $user])) // Comprueba si después del put hace bien la redirección
                ->assertSessionHasErrors('email');
        /*       ->assertSessionHasErrors([
          'email' => 'Este campo es obligatorio'
          ]); */

        $this->assertDatabaseMissing('users', $credentials); // Comprueba que un registro con los datos nuevos no existe
    }

    /** @test */
    public function email_must_be_unique_when_updating_the_user() {
        /* self::markTestIncomplete();
        return; */

        User::factory()->create([
            'name' => 'Email must be unique',
            'email' => 'email-must-be-unique@on-updating.net'
        ]);
        
        $user = User::factory()->create([
            'name' => 'Anothe email unique',
            'email' => 'another-email-unique@on-updating.net'
        ]);

        // $this->withoutExceptionHandling();

        $credentials = [
            'name' => 'Anothe email unique',
            'email' => 'email-must-be-unique@on-updating.net',
            'password' => ''
        ];

        $this->from(route('users.edit', ['user' => $user]))
                ->put(route('users.update', ['user' => $user]), $credentials)
                ->assertRedirect(route('users.edit', ['user' => $user])) // Comprueba si después del put hace bien la redirección
                ->assertSessionHasErrors('email')
                ;

        // $this->assertDatabaseMissing('users', $credentials); // Comprueba que un registro con los datos nuevos no existe
    }

    /** @test */
    public function password_is_optional_when_updating_the_user() {
        $user = User::factory()->create([
            'email' => 'password@isoptional.net',
            'password' => bcrypt('clave_anterior'),
        ]);

        // $this->withoutExceptionHandling();

        $credentials = [
            'name' => 'Password is optional',
            'email' => 'password@isoptional.net',
            'password' => ''
        ];

        $this->from(route('users.edit', ['user' => $user]))
                ->put(route('users.update', ['user' => $user]), $credentials)
                ->assertRedirect(route('users.show', ['user' => $user])) // Comprueba si después del put hace bien la redirección
        ;

        $this->assertDatabaseMissing('users', $credentials); // Comprueba que un registro con los datos nuevos no existe
        
        $credentials = [
            'name' => 'Password is optional',
            'email' => 'password@isoptional.net',
            'password' => 'clave_anterior'
        ];
        
        $this->assertCredentials($credentials);
    }
    
    /** @test */
    public function users_email_can_stay_the_same_when_updating_the_user() {
        $user = User::factory()->create([
            'email' => 'email_is_the_same@updating.net',
            'password' => bcrypt('clave_anterior'),
        ]);

        // $this->withoutExceptionHandling();

        $credentials = [
            'name' => 'Email is the same',
            'email' => 'email_is_the_same@updating.net',
            'password' => '12345678'
        ];

        $this->from(route('users.edit', ['user' => $user]))
                ->put(route('users.update', ['user' => $user]), $credentials)
                ->assertRedirect(route('users.show', ['user' => $user])) // Comprueba si después del put hace bien la redirección
        ;

        $this->assertDatabaseMissing('users', $credentials); // Comprueba que un registro con los datos nuevos no existe
        
        $credentials = [
            'name' => 'Email is the same',
            'email' => 'email_is_the_same@updating.net'
        ];
        
        $this->assertDatabaseHas('users',$credentials);
    }

}
