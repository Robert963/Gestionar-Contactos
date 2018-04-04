
 <!-- SE INCLUYE UNA SECCION DE PAG SOLO USANDO EL METODO include pasando como parametro el nombre del archivo a incluir -->
@include('Part\cabecera')


   <!--   <div class="col-8"> -->
         <h1>Lista de {{ $title }}</h1>

<a href="{{ url('contacto/crear') }}"> Registrar Nuevo Contacto </a>
   
</br></br>
<?php $i=0; foreach ($contactos as $key => $contacto):  ?>
    <div class="row xl">                   
                        
                <div class="col-2">    
                      <?php echo e($contacto->pri_nombre) ?> 
                </div>

                <div class="col-2">    
                      <?php echo e($contacto->pri_apellido) ?>  
                </div>

                <div class="col-2">    
                      <?php echo e($contacto->email) ?>  
                </div>

                <div class="col-1">    
                      <?php echo e($contacto->telefono) ?>  
                </div>
                <div class="col-1">    
                      <?php echo e($reg[$i]->nombre) ?>  
                </div>

                 <div class="col-1"> 
                      
                      <?php echo e($tip[$i]->tipo)  ?>  
                   
                  </div>
                    
                        
              <div class="col-1">  <a href="{{ url('/editar/'.$contacto->id_cont) }}">Editar                             </a>  </div>
              <div class="col-1">  <a href="{{ url('contacto/crear')  }}"> Crear  </a>  </div>
              
              
              <div class="col-1 align-items-end">   

                <form action="{{ route('borrar',$contacto) }}" method="post" > 

                     {{  csrf_field() }}
                     {{ method_field('DELETE') }}
                     <button type="submit" class="btn btn-link align-items-end pb-1" style=" padding: 0em; !important"> Borrar </button>

                </form>
              
              </div>
             
              

    </div>                   
      

<?php $i=$i+1; endforeach ?>

         
@include('Part\pie') 
