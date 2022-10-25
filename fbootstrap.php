<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORMULARIO AVANZADO</title>
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <!-- style css -->
    <link rel="stylesheet" href="css/estiloss.css">
</head>
<body>
<header style="height: 70px">
    <h1 class="card-header text-center">Instituto Nacional de Jucuapa</h1>
</header>
<div style="height: 30px;"></div>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="card shadow-lg p-3 mb-5 bg-white ">
                <div class="card-header">Calculadora en PHP</div>
                    <div class="card-body">
                        <form id="form1" action="calculadora.php" method="post" class="needs-validation" novalidate>
                        <div class="form-row">
                            <div class="col-md-12">
                                <label for="nombre">Introduzca número 1:</label>
                                <input name="n1" type="number" class="form-control" id="nombre" placeholder="" value="" required>
                                <div class="valid-feedback">¡Ok válido!</div>
                                <div class="invalid-feedback">Complete el campo.</div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-12">
                                <label for="nombre">Introduzca número 2:</label>
                                <input name="n2" type="number" class="form-control" id="nombre" placeholder="" value="" required>
                                <div class="valid-feedback">¡Ok válido!</div>
                                <div class="invalid-feedback">Complete el campo.</div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-12" style="margin-top:30px">
                                <button class="btn btn-primary" type="submit">Sumar</button>
                                &nbsp&nbsp
                                <button class="btn btn-danger" type="reset">Limpiar</button>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>



   <!-- Javascript files-->
<script src="codigo.js"></script>
</body>
</html>