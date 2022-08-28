<?php require_once "./layout/header.php" ?>

<body>

    
<?php

    if(isset($_GET['error'])) {
        echo '<div class="alert alert-danger" role="alert">
            Error
        </div>';
    }




?>


<div class="">
    <form action="functions/register.php" method="POST">
        <div class="card">
            <div class="card-title">
                <p class="text-center h5">Registro</p>
            </div>
            <div class="card-body">

                <div class="row mb-2">
                    <div class="col-6">
                        <label for="name">Nombre</label>
                        <input type="text" id="name" placeholder="Usuario" name="name" class="form-control" autoComplete="off" required >
                    </div>
                    <div class="col-6">
                        <label for="lastname">Apellido</label>
                        <input type="text" id="lastname" placeholder="Apellido" name="lastname" class="form-control" autoComplete="off" required >
                    </div>
                </div>

                <div class="row mb-2">
                    <div class="col">
                        <label for="email">Email</label>
                        <input type="email" id="email" placeholder="Email" name="email" class="form-control" autoComplete="off" required >
                    </div>
                </div>


                <div class="row mb-2">
                    <div class="col-6">
                        <label for="password">Contraseña</label>
                        <input type="password" id="password" placeholder="Contraseña" name="password" class="form-control" required >
                    </div>
                    <div class="col-6">
                        <label for="password2">Confirmar Contraseña</label>
                        <input type="password" id="password2" placeholder="Contraseña" name="password2" class="form-control" required >
                    </div>
                </div>

                <div class="mb-2">
                    <input type="submit" value="Crear cuenta" class="btn btn-primary w-100">
                </div>

                <div class="d-flex justify-content-end">
                    <a href="index.php" class="text-decoration-none">¿Ya tienes cuenta?</a>
                </div>

            </div>
        </div>
    </form> 
</div>


<?php require_once "./layout/footer.php" ?>
</body>
</html>

