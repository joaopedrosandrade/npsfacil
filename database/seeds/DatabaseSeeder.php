<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'João Pedro Sousa Andrade',
            'email' => 'admin@admin.com',           
            'password' => Hash::make('159753'),
            'empresa' => 'For Logic', 
           
           
        ]);
    }
}
