<?=$header?>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Editar datos del libros</h5>
            <p class="card-text">
            <form method="post" action="<?=site_url('/actualizar');?>" enctype="multipart/form-data">

                <input type="hidden" name="id" value="<?=$libro['id']?>">

                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input id="nombre" value="<?=$libro['nombre']?>" class="form-control" type="text" name="nombre">
                </div>

                <div class="form-group">
                    <label for="imagen">Imagen</label>
                    <input id="imagen" class="form-control-file" type="file" name="imagen">
                    <img class="img-thumbnail" src="<?=base_url()?>/uploads/<?=$libro['imagen'];?>" width="100" alt="">
                </div>

                <button class="btn btn-success" type="submit">Actualizar</button>
                <a href="<?=base_url('listar');?>" class="btn btn-info">Cancelar</a>
            </form>
            </p>
        </div>
    </div>
<?=$footer?>