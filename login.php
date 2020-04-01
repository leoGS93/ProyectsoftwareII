<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <head>
        <title>LOGIN ESCUELA</title>
    
        <!--JQUERY-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        
        <!-- FRAMEWORK BOOTSTRAP para el estilo de la pagina-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        
        <!-- Los iconos tipo Solid de Fontawesome-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
        <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
    
        <!-- Nuestro css-->
        <link rel="stylesheet" type="text/css" href="static/css/index.css" th:href="@{/css/index.css}">
    
    </head>
</head>
<body>
<div class="col-sm-8">

<div class="modal-dialog text-center"> 
<div class="modal-content">
<div class="col-12">
<img src="FRONTEND/Vista/img/imn.png">
</div>
<form action= "ModeloF/loguear.php" methodo="POST" class="col-12">
<div class="form-group">
    <!-- campos requeridos y nombrados del db con name -->
    <input type="text" name="usuario"class="form-control"placeholder="Nombre de Usuario"/>
</div>


<!--
<div class="form-group">
    <input type="email"class="form-control" placeholder="Correo"/>
</div>  -->


  <!-- campos requeridos y nombrados del db con name -->
<div class="form-group">
    <input type="password" name="clave" class="form-control"placeholder="digite contraseña"/>
</div>
    <button type="submit" class="btn btn-primary"><i class= "fas fa-sign-in-alt"></i>   Ingresar</button>


</form>
</div>
</div>
</div>  



    
   
</body>
</html>