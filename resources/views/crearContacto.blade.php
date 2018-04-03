
@extends('pagMaestra') 

@section('title'," Creando Usuario")

@section('Contenido')


      <h1> Registrar Contacto</h1>
<?php 

//Laravel pasa automaticamente la var $errors a las vistas exista o no errores 

// con $errors->all() obtenemos todos los errores ocurridos

?>
     @if($errors->any())
       
	    <div class="alert alert-danger">   
	         @foreach ($errors->all() as $errores)
	        <ul> 
			         <li> 

			         {{ $errores }}

			         </li>
	        </ul> 
	    
	    </div> 	
	         @endforeach

      @endif

         </br>
<div style="max-width:89% ! important; float: left"> 

       <form method="POST" action="{{ url('contacto/guardar') }}">
		       {!! csrf_field() !!}
              
			<div class=" form-group">
			   <label for="nombre"> Nombre: </label>
		       <input type="text" name="nombre" id="nombre" placeholder="Pedro Perez" value="{{ old('nombre') }}" class="form-control"> 
				@if($errors->has('nombre'))
                    <p>  {{ $errors->first('nombre')  }} </p>
				@endif
		    </div>

		    <div class=" form-group">
			   <label for="apellido"> Apellido: </label>
		       <input type="text" name="apellido" id="apellido" placeholder="Perez" value="{{ old('apellido') }}" class="form-control"> 
				@if($errors->has('nombre'))
                    <p>  {{ $errors->first('apellido')  }} </p>
				@endif
		    </div>


		    <div class=" form-group">
			   <label for="telefono"> Teléfono: </label>
		       <input type="text" name="telefono" id="telefono" placeholder="83755669" value="{{ old('telefono') }}" class="form-control"> 
				@if($errors->has('nombre'))
                    <p>  {{ $errors->first('apellido')  }} </p>
				@endif
		    </div>

              <div class=" form-group">
				<label for="sexo"> Sexo: </label>

		       <select id="sexo" name="sexo" class="form-control"> 
                      <option value="0" selected> Seleccione </option>
                      <option value="M"> Masculino</option>
                      <option value="F"> Femenino</option>  
		       </select>

				@if($errors->has('sexo'))
                    <p>  {{ $errors->first('apellido')  }} </p>
				@endif
		    </div>
              
            <div class="form-group"> 

		       <label for="correo"> Correo: </label>
		       <input type="text" name="correo" id="correo" placeholder="Zws@hotmail.com" value="{{ old('correo') }}" class="form-control" >
			</div>


			<div class=" form-group">
			   <label for="id_tipo"> Tipo: </label>
		       <select id="id_tipo" name="id_tipo" class="form-control">
						 @foreach($tipo as $t)
						   <option value="{{ $t->id_tipo }}"> {{ $t->tipo }} </option>
						 @endforeach
				</select>			
		    </div>

            <div class=" form-group">		    

			    <label for="id_pais"> Pais: </label>

				<select id="id_pais" name="id_pais" class="form-control">
						 @foreach($pais as $p)
						   <option value='{{ $p->id_pais }}'> {{ $p->nombre }} </option>
						 @endforeach
				</select>

            </div>	
					    	
				<button type="submit" class="btn btn-primary"> Registrar</button>

       </form>


</div>


 @endsection

         
@section('NuevaSeccion')
   
  <a href="{{ url('contactos/listar') }}" class="btn btn-link"> >> LISTAR CONTACTOS</a>
        
@endsection 
