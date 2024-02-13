

<!-- Modal -->
<div class="modal fade" id="edit{{$carrera->idcarrera}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel"> Modificar Nombre</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{route('home.update', $carrera->idcarrera)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="modal-body">
        <div class="mb-3">
          <label for="" class="form-label">Nombre</label>
          <input type="text"
            class="form-control" name="nombre" id="nombre" aria-describedby="helpId" placeholder="Nombre de la Carrera" value="{{$carrera->nombre}}">
          
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Guardar</button>
      </div>
      </form>
      `
      
    </div>
  </div>
</div>
