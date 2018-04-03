
@extends('pagMaestra') 

@section('title'," Creando Usuario")

@section('Contenido')


      <h1>Actualizar Contacto</h1>
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

       <form method="POST" action="{{ url("actualizar/{$contacto->id_cont} " ) }}"  >
           {{-- method_field('PUT') --}}
          
           {!! csrf_field() !!}

               <input type="hidden" value="{{$contacto->id_cont}}" name="id_cont" id="id_cont">

              
      <div class=" form-group">
         <label for="nombre"> Nombre: </label>
           <input type="text" name="nombre" id="nombre" placeholder="Pedro Perez" value="{{ old('nombre',$contacto->pri_nombre) }}" class="form-control"> 
        @if($errors->has('nombre'))
                    <p>  {{ $errors->first('nombre')  }} </p>
        @endif
        </div>

        <div class=" form-group">
         <label for="apellido"> Apellido: </label>
           <input type="text" name="apellido" id="apellido" placeholder="Perez" value="{{ old('apellido',$contacto->pri_apellido) }}" class="form-control"> 
        @if($errors->has('nombre'))
                    <p> {{ $errors->first('apellido')  }} </p>
        @endif
        </div>


        <div class=" form-group">
         <label for="telefono"> Teléfono: </label>
           <input type="text" name="telefono" id="telefono" placeholder="83755669" value="{{ old('telefono',$contacto->telefono) }}" class="form-control"> 
        @if($errors->has('nombre'))
                    <p>  {{ $errors->first('apellido') }} </p>
        @endif
        </div>

              <div class=" form-group">
        <label for="sexo"> Sexo: </label>

           <select id="sexo" name="sexo" class="form-control"> 
                     @if($contacto->sexo=="M")
                      <option value="{{ $contacto->sexo }}" selected> Masculino  </option>
                      @endif
                     @if($contacto->sexo=="F")
                      <option value="F"> Femenino</option> 
                      @endif

           </select>

        @if($errors->has('sexo'))
                    <p>  {{ $errors->first('sexo')  }} </p>
        @endif
        </div>
              
            <div class="form-group"> 

           <label for="correo"> Correo: </label>
           <input type="text" name="correo" id="correo" placeholder="Zws@hotmail.com" value="{{ old('correo',$contacto->email) }}" class="form-control" >
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
                
        <button type="submit" class="btn btn-primary"> Actualizar </button>

       </form>


</div>


 @endsection

         
@section('NuevaSeccion')
   
  <a href="{{ url('contactos/listar') }}" class="btn btn-link"> >> LISTAR CONTACTOS</a>
        
@endsection 
