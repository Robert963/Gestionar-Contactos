
@extends('pagMaestra') 

@section('title'," Reg Pais")

@section('Contenido')


      <h1>Editar Pais</h1>
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

       <form method="POST" action="{{ url("pais/actualizar/{$pais->id_pais} " ) }}">
           {!! csrf_field() !!}
      <input type="hidden" value="{{$pais->id_pais}}" name="id_pais" id="id_pais">
              
      <div class=" form-group">
         <label for="nombre"> Nombre: </label>
           <input type="text" name="nombre" id="nombre" placeholder="Nicaragua" value="{{ old('nombre',$pais->nombre) }}" class="form-control"> 
        @if($errors->has('nombre'))
                    <p>  {{ $errors->first('nombre')  }} </p>
        @endif
        </div>
                
        <button type="submit" class="btn btn-primary"> Actualizar</button>

       </form>


</div>


 @endsection

         
@section('NuevaSeccion')
   
  <a href="{{ url('contactos/listar') }}" class="btn btn-link"> >> LISTAR CONTACTOS</a>
        
@endsection 
