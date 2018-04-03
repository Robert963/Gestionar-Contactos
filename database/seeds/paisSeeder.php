<?php

use Illuminate\Database\Seeder;

class paisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
         	\App\Models\Pais::create([ 
        		'nombre'=>'Venezuela', 	
        	]);

        	\App\Models\Pais::create([ 
        		'nombre'=>'Canada', 	
        	]);

        	\App\Models\Pais::create([ 
        		'nombre'=>'Guatemala', 	
        	]);

    }
}
