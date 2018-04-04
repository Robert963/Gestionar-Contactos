<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pais;

class PaisController extends Controller
{
    //


  function  listarpais(){

          $paises = Pais::all();

          return view('pais.mostrarPaises', compact('paises'));

    }


     function Form()
          {
                
          
      	     return view("pais.crearPais");

          }


 

    	function borrarPais(Pais $pais)
		{
            
            $pais->delete();

			return redirect()->route('paises');
		}  


       function  Guardar(){

				 $data = request()->validate([ 

				                	'nombre'    => 'required',

				                	], 

				                	[ 
				                		'nombre.required'    => 'El campo Pais es requerido',
				                		
				                	]);
				   
				           /* ******      CREAR NUEVO USUARIO (Registrar en la BD) ******/
				      	Pais::create([ 

				      			'nombre'    =>$data['nombre'],

				      		]);
				
      	return redirect()->route('paises');
				      	
          }



public function editarPais(Pais $pais)
          {
             
          	 return view('pais.editarPais',['pais'=>$pais]);
          
          } 

function actualizarPais(Request $pais)   
	     	{
                  
	     		$obj = Pais::findOrFail($pais->id_pais);

	     		$obj->nombre     = $pais->nombre;
	     		
                
	     		$obj->update();
          

			return redirect()->route('paises');
                

	     	}





}
