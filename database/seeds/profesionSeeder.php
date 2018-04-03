<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class profesionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
       DB::table('profesion')->insert([ 
        		'nombre'=>'Desarrollador Back-end', 	
        	]);

        DB::table('profesion')->insert([ 
        		'nombre'=>'Doctor', 	
        	]);

         DB::table('profesion')->insert([ 
        		'nombre'=>'Ingeniero Civil', 	
        	]);
    }
}
