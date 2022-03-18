<?php require_once RUTA_APP . "/views/includes/header.php" ?>

<a href="<?php echo RUTA_URL ?>libros/index" class="btn btn-primary"><i class="fas fa-chevron-left pe-3"></i>Volver</a>

<h1 class="display-4 fw-bold text-center py-3"><?php echo $data['title']; ?></h1>

<div class="card card-body bg-light mt-5">
  <form action="<?php echo RUTA_URL ?>libros/borrar/<?php echo $data["id_libro"] ?>" method="POST" class="row">
    <div class="form-group col-md-6 mb-3">
      <label class="form-label" for="titulo">Titulo</label>
      <input type="text" class="form-control" id="titulo" name="titulo" value="<?php echo $data["titulo"] ?>" readonly>
    </div>
    <div class="form-group col-md-6 mb-3">
      <label class="form-label" for="no_paginas">Numero paginas</label>
      <input type="number" min="0" class="form-control" id="no_paginas" name="no_paginas" value="<?php echo $data["no_paginas"] ?>" readonly>
    </div>
    <div class="form-group col-md-6 mb-3">
      <label class="form-label" for="nombre_autor">Nombre autor</label>
      <input type="text" class="form-control" id="nombre_autor" name="nombre_autor" value="<?php echo $data["nombre_autor"] ?>" readonly>
    </div>
    <div class="form-group col-md-6 mb-3">
      <label class="form-label" for="imprenta">Imprenta</label>
      <input type="text" class="form-control" id="imprenta" name="imprenta" value="<?php echo $data["imprenta"] ?>" readonly>
    </div>
    <input type="submit" class="btn btn-danger" value="Eliminar libro">
  </form>
</div>

<?php require_once RUTA_APP . "/views/includes/footer.php" ?>