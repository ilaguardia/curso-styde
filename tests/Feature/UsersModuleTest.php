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
        $this->withoutExceptionHandling();

        $this->post('/usuarios', [
            'name' => 'Duilio',
            'email' => 'duilio@email.com',
            'password' => '1234'
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
            'password' => '1234'
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
        ])   ;
        
        // Comprueba que no hay ningún usuario dado de alta
        $this->assertEquals(0, User::count());
                
    }
    
    /** @test */
    public function email_is_required_in_form_new_users() {
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
        ])   ;
        
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
                /*->assertSessionHasErrors([
                    'email' => 'Este campo es obligatorio'
                    ]) */ // Mirar mensajes de error para esto
                ;

        // Comprueba que no se ha creado ese usuario
        $this->assertDatabaseMissing('users', [
            'name' => 'Duilio',
        ])   ;
                
    }
    
    /** @test */
    public function email_must_be_unique_in_form_new_users() {
        DB::table('users')->truncate();

        // $this->withoutExceptionHandling();
        
        User::factory()->create([
            'email'=>'duilio@styde.net',
        ]);
        
        $this->from(route('users.create'))
                ->post('/usuarios', [
                    'name' => 'Duilio',
                    'email' => 'duilio@styde.net',
                    'password' => '1234'
                ])
                ->assertRedirect(route('users.create'))
                ->assertSessionHasErrors('email')
                ->assertSessionHasErrors([
                    'email' => 'Este email ya tiene cuenta asociada'
                    ])
                ;

        // Comprueba que se ha creado ese usuario
        $this->assertDatabaseHas('users', [
            'email' => 'duilio@styde.net',
        ])   ;
        
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
        ])   ;
        
        // Comprueba que no hay ningún usuario dado de alta
        // $this->assertEquals(0, User::count());
                
    }

}
