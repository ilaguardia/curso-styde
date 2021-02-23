<?php

namespace Tests\Feature;

use App\Models\User;
use App\Models\Profession;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Testing\RefreshDatabase;
// use Illuminate\Foundation\Testing\DatabaseMigrations; // sustituye a RefreshDatabase - pendiente revisar esto que parece que no tiene nada que ver.

use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;


class UsersModuleTest extends TestCase
{

    use RefreshDatabase; //Recrea la bd con los migrations que existen. Si ha habido cambios los aplica.
    // use DatabaseMigrations; - Se supone que esto sustituye a refresh, pero al final parece que no.
    
    /**
     * A basic feature test example.
     *
     * @test
     */
    public function it_shows_the_users_list()
    {
    
    	Profession::factory()->count(5)->create();
    	
    	User::factory()->create([
        	'name' => 'Joel',
        	'profession_id' => rand(1,5),
        ]);
        
        User::factory()->create([
        	'name' => 'Ellie',
        	'profession_id' => rand(1,5),
        ]);
    
        $response = $this->get('/usuarios');
        $response->assertStatus(200);
        $response->assertSee('Listado de Usuarios', true);
        $response->assertSee('Joel', true);
        $response->assertSee('Ellie', true);
        
    }
    
    /** @test */
    public function it_shows_the_user_detail()
    {
    	Profession::factory()->count(5)->create();
    	
    	dd($profession);
    	
    	User::factory()->create([
        	'name' => 'Joel',
        	'profession_id' => rand(1,5),
        ]);
    	
    	/* $user = User::factory()->create([
    		'name' => 'Duilio Palacios',
    		'profession_id' => rand(1,5),
    	]);
    
    	
    
        $response = $this->get('/usuarios/'.$user->id); // selecciono el nombre de usuario que acabo de crear */
        $response->assertStatus(200);
        $response->assertSee('Detalle del usuario: 5', true);
        $response->assertSee('Joel');
        $response->assertSee('Duilio Palacios');
    }
    
    
    /** @test */
    public function it_shows_no_users()
    {
    
    	DB::table('users')->truncate();
    
    	// Al truncar la table ya no hace falta que comparemos con empty
        // $response = $this->get('/usuarios?empty');
        $response = $this->get('/usuarios');
        
        $response->assertStatus(200);
        $response->assertSee('No hay usuarios registrados', true);
    }
    
    /** @test */
    public function users_new_page_loads()
    {
        $response = $this->get('/usuarios/nuevo');

        $response->assertStatus(200);
        $response->assertSee('Create usuario nuevo', true);
    }
    
    
}
