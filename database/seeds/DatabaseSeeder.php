<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

         $this->BorrarRegistrosTablas([
                 'pais',
                 'profesion',
                 'tipocontacto',
         	]);

        
        $this->call(paisSeeder::class); 
        $this->call(profesionSeeder::class); 
        $this->call(tipoContactoSeeder::class); 


    }


      protected function BorrarRegistrosTablas(array $tables)
          {
          	

			   foreach ($tables as $tabla) 
			        {

                       DB::statement("TRUNCATE TABLE  $tabla CASCADE"); //pgsql
			      
			         }
          }

 }         
