
@extends('pagMaestra') 

@section('title'," Reg Pais")

@section('Contenido')


      <h1> Registrar Nuevo Pais</h1>
<?php 


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

       <form method="POST" action="{{ url('pais/guardar') }}">
           {!! csrf_field() !!}
              
      <div class=" form-group">
         <label for="nombre"> Nombre: </label>
           <input type="text" name="nombre" id="nombre" placeholder="Nicaragua" value="{{ old('nombre') }}" class="form-control"> 
        @if($errors->has('nombre'))
                    <p>  {{ $errors->first('nombre')  }} </p>
        @endif
        </div>
                
        <button type="submit" class="btn btn-primary"> Registrar</button>

       </form>


</div>


 @endsection

         
@section('NuevaSeccion')
   
  <a href="{{ url('contactos/listar') }}" class="btn btn-link"> >> LISTAR CONTACTOS</a>
        
@endsection 
