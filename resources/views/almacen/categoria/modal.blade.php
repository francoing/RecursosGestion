<div class="modal fade modal-slide-in-right" aria-hidden:"true" role="dialog" tabindex="-1"  id="modal-delete-{{$cat->idcategoria}}">

{{form::Open(array('action'=>array('CategoriaController@destroy',$cat->idcategoria),'method'=>'DELETE'))}}
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button class="close" type="button" data-dismiss="modal"aria-Label="Close">
                    <span aria-hiden="true">x</span>
                </button>


                <h4 class="modal-title">Eliminar Categoria</h4>

            
            </div>
            <div class="modal-body">
                <p>Confime si desea eliminar categoria</p>

            
            </div>
            <div class="modal-footer">
                
                <button type="button" class="btn btn-default"data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary" data-dismiss="modal">Confirmar</button>    
            
            </div>
        
        </div>
    
    </div>

{{form::Close()}}
</div>