<?php require_once "./layout/header.php" ?>

<body>

    
<?php

    if(isset($_GET['error'])) {
        echo '<div class="alert alert-danger" role="alert">
            Error
        </div>';
    }




?>


<div class="d-flex justify-content-center align-items-center">
    <form action="functions/ingresar.php" method="POST">
        <div class="card">
            <div class="card-title">
                <p class="text-center h5">Ingresar</p>
            </div>
            <div class="card-body">

                <div class="mb-2">
                    <label for="name">Nombre</label>
                    <input type="text" id="name" placeholder="Usuario" name="name" class="form-control" autoComplete="off" required >
                </div>

                <div class="mb-2">
                    <label for="password">Contraseña</label>
                    <input type="password" id="password" placeholder="Contraseña" name="password" class="form-control" required >
                </div>

                <div class="mb-2">
                    <input type="submit" value="Ingresar" class="btn btn-primary w-100">
                </div>

                <div class="d-flex justify-content-end">
                    <a href="register.php" class="text-decoration-none">¿Aún no tienes cuenta?</a>
                </div>

            </div>
        </div>
    </form> 
</div>


<?php require_once "./layout/footer.php" ?>
</body>
</html>

