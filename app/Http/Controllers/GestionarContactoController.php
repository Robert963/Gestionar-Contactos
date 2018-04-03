<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contactos;
use Illuminate\Validation\Rule;

class GestionarContactoController extends Controller
{
    //

     
     function Form()
          {

                $pais = \App\Models\Pais::all();//Instanciando la clase directamente para obtener los datos
                $tipo = \App\Models\Tipocontacto::all();//Instanciando la clase directamente para obtener los datos
                
          
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
				// Rutas renombradas 
				      	return "Usuario Guardado correctamente";
				      //	return redirect()->route('');
				      	//return redirect('usuarios');



          }

}
