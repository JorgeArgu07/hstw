<div class="container-fluid py-3">
    <div class="row">
      <div class="col-md-6 col-sm-1">
        <h1 class="header">Área de cobranza</h1>
        <div class="input-group mb-1">
          <input type="text" class="form-control" placeholder="Buscar cliente por nombre" id="inputBuscar">
          <div class="input-group-append">
            <button class="btn btn-danger" type="button" id="btnBuscar">
              <i class="fas fa-fw fa-search"></i>
            </button>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-8">
        <table class="table table-hover table-responsive">
          <thead>
            <tr class="bg-danger">
              <th scope="col">#</th>
              <th scope="col">Nombre</th>
              <th scope="col">Apellidos</th>
              <th scope="col">Fecha de Nacimiento</th>
              <th scope="col">CURP</th>
              <th scope="col">RFC</th>
              <th scope="col">Direccion/es</th>
            </tr>
          </thead>
          <tbody id="bodytabla">
                              
                              
          </tbody>      
      </div>
    </div>
  </div>  
</div>

<div class="modal fade" id="modalDir" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog-scrollable modal-dialog" role="document">
      <div class="modal-content">
          <div class="modal-header bg-danger">
              <h5 class="modal-title " id="exampleModalLabel">Dirección de cliente</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body">
              <div class="container-fluid">
                  <div class="row">
                      <div class="col-md-12 col-sm-12" id="direccioncte" style="text-align: center;">

                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>