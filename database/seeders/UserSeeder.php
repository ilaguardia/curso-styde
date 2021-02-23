<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* User::create([
        	'dni' => '12345678R',
        	'name' => 'Isabel',
        	'surname' => 'Laguardia',
        	'email' => 'isabel@diverscabodepalos.com',
        	'profession_id' => '1',
        	'password' => Hash::make('laravel'),
        	
        ]); */
        
        User::factory()->create([
        	'dni' => '12345678R',
        	'name' => 'Isabel',
        	'surname' => 'Laguardia',
        	'email' => 'isabel@diverscabodepalos.com',
        	'profession_id' => '1',
        	'password' => Hash::make('laravel'),
        	
        ]);
        
        User::factory()->create([
        	'dni' => '08930018S',
        	'name' => 'Raul',
        	'surname' => 'Ibañez',
        	'email' => 'raul@diverscabodepalos.com',
        	'profession_id' => '1',
        	'password' => Hash::make('laravel'),
        	
        ]);
        
        /* DB::table('users')->insert([
            'dni' => rand ( 10000000 , 99999999 ).Str::random(1),
            'name' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'password' => Hash::make('password'),
        ]); */
        
        User::factory()->create();
        User::factory()->count(5)->create([
        	'surname' => 'Laguardia',
        ]);
        
    }
}
