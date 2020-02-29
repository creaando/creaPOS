<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Administrar Usuarios del Sistema</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="inicio"><i class="fas fa-home"> POS</a></i></li>
                        <li class="breadcrumb-item active">administrar usuarios</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <!-- <h3 class="card-title">Usuarios</h3> -->

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                        <i class="fas fa-minus"></i></button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                        <i class="fas fa-times"></i></button>
                </div>

                <button class="btn btn-flat btn-primary" data-toggle="modal" data-target="#modalAgregarUsuario">
                    Agregar Usuario
                </button>



            </div>
            <div class="card-body">
                <?php
                    include "vistas/modulos/usuarios/contenedor.php"
                ?>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                Footer
            </div>
            <!-- /.card-footer-->
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
</div>

<!-- ===================================================
ventana modal de agregar usuarios
=================================================== -->

<div class="modal fade" id="modalAgregarUsuario">
    <div class="modal-dialog">
        <div class="modal-content">

            <form role="form" method="POST" enctype="multipart/form-darta">

                <div class="modal-header" style="background:#20c997; color:white;">
                    <h4 class="modal-title">Agregar Usuario</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                <!-- general form elements -->
                    <div class="card card-primary">
                        <!-- <div class="card-header">
                            <h3 class="card-title">Quick Example</h3>
                        </div> -->
                    <!-- /.card-header -->
                    <!-- <form role="form"> -->
                        <div class="card-body">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-id-card"></i></span>
                                </div>
                                <input type="text" class="form-control" name="nombre" placeholder="Nombre completo" required>
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                </div>
                                <input type="text" class="form-control" name="usuario" placeholder="Nombre de usuario" required>
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                                </div>
                                <input type="text" class="form-control" name="password" placeholder="Password" required>
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-id-card-alt"></i></span>
                                </div>
                                <!-- <input type="text" class="form-control" placeholder="Perfil del usuario" required> -->
                                <select class="form-control" name="perfil">
                                    <option>Seleccione perfil</option>
                                    <option>Administrador</option>
                                    <option>Especial</option>
                                    <option>Vendedor</option>
                                </select>
                            </div>

                            <!-- <div class="form-group">
                                <label for="exampleInputFile">Subir foto</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="nuevaFoto" name="nuevaFoto">
                                        <label class="custom-file-label" for="nuevaFoto">Eligir archivo</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="">Subir</span>
                                    </div>
                                </div>
                            </div> -->

                            <div class="form-group">
                                <div class="card mb-3">
                                    <div class="row no-glutters">
                                        <div class="col-md-4">
                                            <img src="vistas/dist/img/user2-160x160.jpg" alt="fotoUsuario">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body text-info">
                                                <h5 class="card-title">Subir Archivo</h5>


                                                <div class="input-group">
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" id="nuevaFoto" name="nuevaFoto">
                                                        <label class="custom-file-label" for="nuevaFoto">Elegir foto</label>
                                                    </div>
                                                    <div class="input-group-append">
                                                        <span class="input-group-text" id="">Subir</span>
                                                    </div>
                                                </div>

                                                <!-- <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> -->

                                                <p class="card-text"><small class="text-muted">Peso maximo 200Mb</small></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-power-off"></i></span>
                                </div>
                                <input type="text" class="form-control" name="estado" placeholder="Estado">
                            </div>

                        </div>
                        <!-- /.card-body -->
                    <!-- </form> -->
                    </div>
    <!-- ========================================= -->
                </div>

                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-flat btn-danger" data-dismiss="modal">
                        <i class="fas fa-times"></i>
                        Cerrar
                    </button>
                    <button type="submit" class="btn btn-flat btn-success">
                        <i class="fas fa-check"></i>
                        Guardar
                    </button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
