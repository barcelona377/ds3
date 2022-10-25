<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Incrustando HTML y PHP</title>
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
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
                    <div class="card-header">Calculadora Salarial</div>
                        <div class="card-body">
                            <form id="form1" action="" method="post" class="needs-validation" novalidate>
                            <div class="form-row">
                                <div class="col-md-12">
                                    <label for="nombre">Horas Trabajadas:</label>
                                    <input name="horas" type="number" class="form-control" id="nombre" placeholder="" value="" required>
                                    <div class="valid-feedback">¡Ok válido!</div>
                                    <div class="invalid-feedback">Complete el campo.</div>
                                </div>
                                <div class="col-md-12">
                                    <label for="pxh">Precio x hora trabajada:</label>
                                    <input name="pxh" type="number" step="any" class="form-control" id="pxh" placeholder="" value="" required>
                                    <div class="valid-feedback">¡Ok válido!</div>
                                    <div class="invalid-feedback">Complete el campo.</div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-12" style="margin-top:30px">
                                        <button class="btn btn-primary" type="submit" name="btncalcular" value="ok">Calcular</button>
                                        &nbsp&nbsp
                                        <button class="btn btn-danger" type="reset">Limpiar</button>
                                    </div>
                                    <div class="col-md-12" style="margin-top:30px">
                                    <textarea name="" id="" class="form-control" cols="120" rows="5">
                                    <?php
                                        if($_POST){
                                            
                                        //variables de entrada
                                        $horas = $_POST['horas'];
                                        $phoras = $_POST['pxh'];
                                    
                                        if($horas > 44){
                                            //si la condicion es verdadera
                                            $hextra = $horas - 44; //determino horas extras
                                            $phextra = ($hextra * $phoras) * 2; //pago de horas extra
                                            $totalht = $phextra + ($phoras * 44);
                                            echo "Aplica a horas extras \n";
                                            echo "Horas extras trabajadas = $hextra \n";
                                            echo "Precio horas extras (doble) = $phextra \n";
                                            echo "Salario semanal = $ $totalht";
                                        }
                                        else
                                        {
                                            //variables de proceso            
                                            $hsemanal = $horas * $phoras;
                                            echo "Salario semanal: $  $hsemanal";
                                        }
                                    
                                        }
                                    ?>
                                    </textarea>
                                    
                                    </div>
                                </div>
                            </div>
                        </form>
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