
<!-- <body class="hold-transition login-page"> -->

<div class="login-page">
    <div class="login-box">
        <div class="login-logo">
        <img src="vistas/dist/img/logo.png" alt="AdminLTE Logo" width="350">
            <!-- <a href="../../index2.html"><b>Crea</b>POS</a> -->
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Iniciar sesión para continuar</p>

                <form action="#" method="post">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Usuario" name="ingUsuario">
                        <div class="input-group-append">
                            <div class="input-group-text">
                            <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="Password" name="ingPassword">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <!-- <div class="icheck-primary">
                                <input type="checkbox" id="remember">
                                <label for="remember">
                                    Recordar
                                </label>
                            </div> -->
                        </div>
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">Iniciar</button>
                        </div>
                    </div>
                    <?php
                        $login=new ControladorUsuarios();
                        $login->ctrIngresoUsuario();
                    ?>
                </form>

                <p class="mb-1">
                    <a href="forgot-password.html">Olvidé el password</a>
                </p>
                <p class="mb-0">
                    <a href="register.html" class="text-center">Registrar nuevo usuario</a>
                </p>
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
<!-- </body> -->
</div>
