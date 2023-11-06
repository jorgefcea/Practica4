<!-- Cabe destacar que, al encontrarnos dentro de un directorio de archivos interno de una empresa la mayoría de metodos utilizados han sido el 
método POST, ya que es el más seguro para el envío de datos confidenciales. Para datos que no he considerado tan confidenciales como un botón 
de volver o el de salir de la sesión se ha utilizado el método GET. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Administrador - Login</title>
    <link rel="stylesheet" href="estilos/estilos.css">
    <link href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.2.0/css/fontawesome.css" rel="stylesheet">
    
</head>
<body>
<div class="container">
    <div class="screen">
        <div class="screen__content">   
            <form class="login" action="index.php" method="post">
                <h2>Panel de Administrador</h2>
                <div class="form-field">
                    <i class="icon fas fa-user"></i>
                    <input type="text" class="input" placeholder="Usuario" name="user">
                </div>
                <div class="form-field">
                    <i class="icon fas fa-lock"></i>
                    <input type="password" class="input" placeholder="Contraseña" name="pass">
                </div>
                <button type="submit" name="boton_login">
                    <span class="button-text">Iniciar Sesión</span>
                    <i class="button-icon fas fa-chevron-right"></i>
                </button>      
            </form>
        </div>
        <div class="screen__background">
            <span class="shape shape4"></span>
            <span class="shape shape3"></span>        
            <span class="shape shape2"></span>
            <span class="shape shape1"></span>
        </div>        
    </div>
</div>
</body>
</html>

