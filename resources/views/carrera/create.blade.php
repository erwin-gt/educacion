
<!-- Modal -->
<div class="modal fade" id="create" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Agregar Carrera</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{route('home.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="modal-body">
            <div class="mb-3">
            <label for="" class="form-label">Nombre</label>
            <input type="text"
                class="form-control" name="nombre" id="" aria-describedby="helpId" placeholder="Carrera">
            <small id="helpId" class="form-text text-muted">Colocar el nombre de la nueva carrera</small>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
            <button type="button" class="btn btn-primary">Guardar</button>
        </div>
      </form>
    </div>
  </div>
</div>