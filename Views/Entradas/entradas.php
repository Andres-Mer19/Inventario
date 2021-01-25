<?php 
    headerAdmin($data); 
    getModal('modalEntradas',$data);
?>
    <div id="contentAjax"></div> 
    <main class="app-content">
      <div class="app-title">
        <div>
            <h1><i class="fa fa-external-link-square"></i> <?= $data['page_title'] ?>
              <button class="btn btn-primary" type="button" onclick="openModal();" ><i class="fas fa-plus-circle"></i> Nuevo</button>
            </h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="<?= base_url(); ?>/entradas"><?= $data['page_title'] ?></a></li>
        </ul>
      </div>
        <div class="row">
            <div class="col-md-12">
              <div class="tile">
                <div class="title-body">
                  <div class="table-responsive">
                    <table class="table table-hover table-bordered" id="tableEntradas">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Nombre</th>
                          <th>Fecha Cosecha</th>
                          <th>Cantidad</th>
                          <th>Fecha Llegada</th>
                          <th>Recibido</th>
                          <th>Status</th>
                          <th>Acciones</th>
                        </tr>
                        
                      </thead>
                      <tbody>
                       
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </main>
<?php footerAdmin($data); ?>