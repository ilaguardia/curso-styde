<?php

namespace Database\Seeders;

use App\Models\Profession;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProfessionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* DB::table('professions')->insert([
        	'title' => 'Instructor',
        ]); 
        
        DB::insert('INSERT INTO professions (title) VALUES (?)', [
            'Desarrollador back-end',
            ]); */
        
        Profession::create([
        	'title' => 'Instructor',
        ]);
        
        Profession::create([
        	'title' => 'Divemaster',
        ]);
        
        Profession::create([
        	'title' => 'Patrón',
        ]);
        
        Profession::factory()->count(5)->create();
    }
}
