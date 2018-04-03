<?php

use Illuminate\Database\Seeder;

class tipoContactoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
           DB::table('tipocontacto')->insert([ 
        		'tipo'=>'Personal', 	
        	]);

           DB::table('tipocontacto')->insert([ 
        		'tipo'=>'Empresa', 	
        	]);

    }
}
