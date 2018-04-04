
 <!-- SE INCLUYE UNA SECCION DE PAG SOLO USANDO EL METODO include pasando como parametro el nombre del archivo a incluir -->
@include('\Part\cabecera')


   <!--   <div class="col-8"> -->
         <h1>Lista de Paises</h1>

<a href="{{ url('contacto/crear') }}"> Registrar Nuevo Contacto </a>
   
</br></br>
<?php $i=0; foreach ($paises as $key => $pais):  ?>
    <div class="row xl">                   
                        
                <div class="col-2">    
                      <?php echo e($pais->id_pais) ?> 
                </div>

                <div class="col-2">    
                      <?php echo e($pais->nombre) ?>  
                </div>

                        
              <div class="col-1">  <a href="{{ url('/pais/editar/'.$pais->id_pais) }}">Editar                             </a>  </div>
              <div class="col-1">  <a href="{{ url('/pais/crear')  }}"> Crear  </a>  </div>
              
              
              <div class="col-1 align-items-end">   

                <form action="{{ route('bpais',$pais) }}" method="POST" > 

                     {{  csrf_field() }}
                     {{ method_field('DELETE') }}
                     <button type="submit" class="btn btn-link align-items-end pb-1" style=" padding: 0em; !important"> Borrar </button>

                </form>
              
              </div>
             
              

    </div>                   
      

<?php $i=$i+1; endforeach ?>

         
@include('\Part\pie') 
