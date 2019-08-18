<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.7/css/mdb.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">


</head>
<body background = "images/back.jpg">
    <nav class="navbar navbar-expand-md navbar-dark pink mb-5 no-content scrolling-navbar fixed-top">
        <div class="container">
            <!-- Breadcrumb-->
            <div class="mr-auto">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb clearfix d-none d-md-inline-flex pt-0">
                        <li class="breadcrumb-item"><a class="white-text" href="#!">Administrar</a><i
                                class="fas fa-angle-double-right mx-2 white-text" aria-hidden="true"></i></li>
                    </ol>
                    <a href="./admin_Blog.php" class="btn btn-flat btn-sm" role="button">
                        <font color="white">Blog</font>
                    </a>
                    <a href="./admin_new_Blog.php" class="btn btn-flat btn-sm" role="button">
                        <font color="white">Voluntariado</font>
                    </a>
                    <a href="./admin_Gallery.php" class="btn btn-flat btn-sm" role="button">
                        <font color="white">Galeria</font>
                    </a>
                </nav>
            </div>
        </div>
        <ul class="navbar-nav ml-auto nav-flex-icons">
            
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false"><i class="fas fa-user"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-unique" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item waves-effect waves-light" href="./logout.php">Salir</a>
                </div>
            </li>
        </ul>
    </nav>
    <br>
    <br>
    <br>
    <br>
    <div class="container">
        <ul class="nav nav-tabs " >
        <li class="nav-item" >
            <a class="nav-link active pink"  href="./Actividades.php"><font color="white">Actividades</font></a>
        </li>
        <li class="nav-item">
            <a class="nav-link active pink" href="./Aulas.php"><font color="white">Aulas Domiciliarias</font></a>
        </li>
        <li class="nav-item">
            <a class="nav-link active pink" href="./Programa.php"><font color="white">Programa de Sensibilización</font></a>
        </li>
        
        </ul>
    </div>
</body>
</html>