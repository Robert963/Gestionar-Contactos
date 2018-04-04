<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contactos;
use App\Models\Pais;
use App\Models\Tipocontacto;

use Illuminate\Validation\Rule;

use \App\Models\Contactos as Cont;

class GestionarContactoController extends Controller
{
    //

     
     function Form()
          {

                $pais = \App\Models\Pais::all();
                $tipo = \App\Models\Tipocontacto::all();
                
          
      	     return view("crearContacto",compact('pais','tipo'));

          }

       function  Guardar(){

				 $data = request()->validate([ //si un campo no es valido retorna automaticamente al formulario

				                	'nombre'    => 'required',
				                	'correo'    => ['required','email','unique:contactos,email'], //'required|email', //requerido y validar que sea un correo valido
				                	'telefono'  => 'required', //ademas de indicar q sea único para ello especificamos el nombre de la tabla y el campo de la misma users,email
				                	'apellido'  => 'required',
				                	'sexo'      =>'required',
				                	'id_tipo'   =>'required',
				                	'id_pais'   =>'required',

				                	], 

				                	[ 
				                		'nombre.required'    => 'El campo nombre es requerido',
				                		'correo.required'    => 'El campo Correo es requerido',
				                		'correo.email'       => 'Correo no válido',
				                		'password.required'  => 'El campo Correo es requerido'
				                	]);
				   
				           /* ******      CREAR NUEVO USUARIO (Registrar en la BD) ******/
				      	Contactos::create([ 

				      			'pri_nombre'    =>$data['nombre'],
				      			'pri_apellido'  =>$data['apellido'],
				      			'email'         =>$data['correo'],
				      			'telefono'      =>$data['telefono'],
				      			'sexo'          =>$data['sexo'],
				      			'id_tipo'       =>$data['id_tipo'],
				      			'id_pais'       =>$data['id_pais'],



				      		]);
				
      	return redirect()->route('contactos');
				      	
          }

function listarContactos()
{ 
          $contactos = \App\Models\Contactos::all();

          $title = 'Contactos';
          $reg = [];
          $i=0;
          $tip =[];

foreach ($contactos as $cont) {
	 
	 $reg[$i] = Pais::find($cont->id_pais);
	 $tip[$i] = Tipocontacto::find($cont->id_tipo);

	 $i=$i+1;
}


return view('mostrarContactos',compact('contactos','title','reg','tip'));


}

	function borrarUsuario(Contactos $user)
		{
            
            $user->delete();

			return redirect()->route('contactos');
		}     	


public function editarContacto(Contactos $user)
          {
             

                $pais = \App\Models\Pais::all();
                $tipo = \App\Models\Tipocontacto::all();

          	 return view('editarContacto',['contacto'=>$user,'pais'=>$pais,'tipo'=>$tipo]);
          

          } 


function actualizarContacto(Request $cont)   
	     	{
                  
	     		$obj = Contactos::findOrFail($cont->id_cont);

	     		$obj->pri_nombre     = $cont->nombre;
	     		$obj->pri_apellido    = $cont->apellido;
                $obj->email = $cont->correo;
                $obj->telefono = $cont->telefono;
                
	     		$obj->update();
          

			return redirect()->route('contactos');
                

	     	}



}
