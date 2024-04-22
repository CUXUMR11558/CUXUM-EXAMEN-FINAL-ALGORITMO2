<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<style>
    body {
        background-image: url(../IMAGES/fondo2.jpeg);
    }

    h1 {
        text-align: center;
    }
</style>




<body>
<?php




?>



    <br>





    <?php



    $jugador1 = 0;
    $dado = 0;
    // $filaActual = 0;
    $resta = 0;
    if (isset($_POST['valor'])) {
        $dado  = rand(1, 12);
        $valorantiguo = $_POST['valor'];
        $jugador1 = $valorantiguo + $dado;
        if ($jugador1 > 100) {

            $resta = $jugador1 - 100;
            $jugador1 = 100 - $resta;
        }


        switch ($jugador1) {
            case '3':
                $jugador1 = 23;
                $mensaje = "USTED CAYO EN LA CASILLA 3 POR LO QUE SUBIO POR LA ESCALERA A LA CASILLA 23";
                $alerta = 1;
                break;
            case '13':
                $jugador1 = 32;
                $mensaje = "USTED CAYO EN LA CASILLA 13 POR LO QUE SUBIO POR LA ESCALERA A LA CASILLA 32";
                $alerta = 1;
                break;
            case '59':
                $jugador1 = 80;
                $mensaje = "USTED CAYO EN LA CASILLA 59 POR LO QUE SUBIO POR LA ESCALERA A LA CASILLA 80";
                $alerta = 1;
                break;
            case '68':
                $jugador1 = 89;
                $mensaje = "USTED CAYO EN LA CASILLA 68 POR LO QUE SUBIO POR LA ESCALERA A LA CASILLA 89";
                $alerta = 1;
                break;
            case '85':
                $jugador1 = 78;
                $mensaje = "USTED CAYO EN LA CASILLA 85 POR LO QUE BAJO POR LA SERPIENTE A LA CASILLA 78";
                $alerta = 1;
                break;
            case '95':
                $jugador1 = 74;
                $mensaje = "USTED CAYO EN LA CASILLA 95 POR LO QUE BAJO POR LA SERPIENTE A LA CASILLA 74";
                $alerta = 1;
                break;
            case '65':
                $jugador1 = 46;
                $mensaje = "USTED CAYO EN LA CASILLA 65 POR LO QUE BAJO POR LA SERPIENTE A LA CASILLA 46";
                $alerta = 1;
                break;
            case '34':
                $jugador1 = 5;
                $mensaje = "USTED CAYO EN LA CASILLA 34 POR LO QUE BAJO POR LA SERPIENTE A LA CASILLA 5";
                $alerta = 1;
                break;

            default:
                if ($dado > 1 && $resta == 0) {

                    $mensaje = "USTED AVANZO $dado CASILLAS";
                } elseif ($dado == 1 && $resta == 0) {
                    $mensaje = "USTED AVANZO $dado CASILLA";
                } elseif ($resta > 0) {
                    $casilla = ($resta > 1) ? 'CASILLAS' : 'CASILLA';
                    $mensaje = "USTED regreso $resta $casilla";
                    $resta = 0;
                }
                $alerta = 1;
                break;
        }
    }
    ?>

    <div class="container" style="text-align: center;">

        <h1>JUEGO DE SERPIENTES Y ESCALERAS</h1>
        <div class="row">
            <div class="col">
                <div class="row">
                    <div class="col-lg-12 mt-2">

                        <form class="bg-white p-5" action="juego.php" method="post">
                            <div class="row">
                                <h3>JUGADOR 1</h3>

                                <div class="col-lg-4">
                                    <label class="form-label" for="valor">ACUMULADO</label><input class="form-control" type="text" id="valor" name="valor" min="1" max="10" value="<?= $jugador1 ?>" required>
                                </div>


                                <div class="col-lg-4">
                                    <label class="form-label" for="dado">DADO</label><input class="form-control" type="text" id="dado" name="dado" min="1" max="10" value="<?= $dado ?>" required>
                                    <input type="hidden" name="Nojugada">
                                </div>
                                <div class="col-lg-4 mt-4">
                                    <input type="submit" id="enviar" name="enviar" class="btn btn-success" value="TIRAR!">
                                </div>
                            </div>

                            <div class="row">


                                <h3>JUGADOR 2</h3>

                                <div class="col-lg-4">
                                    <label class="form-label" for="valor">ACUMULADO</label><input class="form-control" type="text" id="valor" name="valor" min="1" max="10" value="<?= $jugador1 ?>" required>
                                </div>


                                <div class="col-lg-4">
                                    <label class="form-label" for="dado">DADO</label><input class="form-control" type="text" id="dado" name="dado" min="1" max="10" value="<?= $dado ?>" required>
                                    <input type="hidden" name="Nojugada">
                                </div>
                                <div class="col-lg-4 mt-4">
                                    <!-- <label class="form-label" for="enviar">DADO JUDADOR 1</label> -->
                                    <input type="submit" id="enviar" name="enviar" class="btn btn-success" value="TIRAR!">
                                </div>
                            </div>

                            <div class="row">

                                <h3>JUGADOR 3</h3>

                                <div class="col-lg-4">
                                    <label class="form-label" for="valor">ACUMULADO</label><input class="form-control" type="text" id="valor" name="valor" min="1" max="10" value="<?= $jugador1 ?>" required>
                                </div>


                                <div class="col-lg-4">
                                    <label class="form-label" for="dado">DADO</label><input class="form-control" type="text" id="dado" name="dado" min="1" max="10" value="<?= $dado ?>" required>
                                    <input type="hidden" name="Nojugada">
                                </div>
                                <div class="col-lg-4 mt-4">
                                    <!-- <label class="form-label" for="enviar">DADO JUDADOR 1</label> -->
                                    <input type="submit" id="enviar" name="enviar" class="btn btn-success" value="TIRAR!">
                                </div>
                            </div>
                            <div class="row mt-3">

                                <div class="col-lg-4">
                                    <a href="juego.php" id="enviar" name="enviar" class="btn btn-warning">REINICIAR </a>
                                </div>
                            </div>
                            <input type="hidden">
                        </form>
                    </div>
                </div>
                    <div class="col-lg-6 mt-5">
                        <?php
                        if ($dado > 0) {

                        ?>
                            <?php
                            if ($jugador1 >= 100) {
                                echo "<div style='border:solid; background-color:green'>";

                            ?>
                                <h1>FELICIDADES GANASTE!!! </h1>
                    </div>
                <?php } else {
                                echo "<div style='border:solid; background-color:yellow'>";
                ?>

                    <h1>TIRO!! </h1>
                    <h1><?= $dado ?></h1>

                    <h2><?= $mensaje ?></h2>
                </div>
        <?php

                            }
                        } ?>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <img src="../IMAGES/escalera1.png" alt="" style="z-index:2; margin-top:130px; margin-left:-290px; position: absolute; width:90px; height: 180px; transform: rotate(-30deg)">
        <img src="../IMAGES/escalera2.png" alt="" style="z-index:2; margin-top:80px; margin-left:160px; position: absolute; width:30px; height: 150px; transform: rotate(20deg)">
        <img src="../IMAGES/escalera3.png" alt="" style="z-index:2; margin-top:460px; margin-left:-180px; position: absolute; width:50px; height:160px; transform: rotate(-10deg)">
        <img src="../IMAGES/escalera4.png" alt="" style="z-index:2; margin-top:410px; margin-left:130px; position: absolute; width:100px; height:150px; transform: rotate(20deg)">
        <img src="../IMAGES/serpiente1.png" alt="" style="z-index:2; margin-top:50px; margin-left:-160px; position: absolute; width:110px; height:150px; transform: rotate(35deg)">
        <img src="../IMAGES/serpiente2.png" alt="" style="z-index:2; margin-top:10px; margin-left:-10px; position: absolute; width:150px; height:120px; transform: rotate(-60deg)">
        <img src="../IMAGES/serpiente3.png" alt="" style="z-index:2; margin-top: 340px; margin-left:-20px; position: absolute; width:100px; height:280px; transform: rotate(35deg)">
        <img src="../IMAGES/serpiente4.png" alt="" style="z-index:2; margin-top:220px; margin-left:-80px; position: absolute; width:150px; height:120px; transform: rotate(-60deg)">



        <table class="tablero" style="z-index: 1;">

            <?php
            if ($jugador1 == 0) {


            ?>

                <img src="../IMAGES/ficha1.png" alt="" style="z-index:2;  width:80px; height:60px; margin-top:555px; margin-left:-450px; position: absolute;">
                <img src="../IMAGES/ficha2.png" alt="" style="z-index:2;  width:70px; height:60px; margin-top:490px; margin-left:-450px; position: absolute;">
                <img src="../IMAGES/ficha3.png" alt="" style="z-index:2;  width:80px; height:60px; margin-top:420px; margin-left:-450px; position: absolute;">

            <?php
            }
            ?>
            <table class="tablero">
                <?php
                $colores = [
                    '0' => 'yellow',
                    '1' => 'white',
                    '2' => 'red',
                    '3' => 'blue',
                    '4' => 'green',
                ];
                $NoCasilla = 101;
                $coloranterior = '';
                for ($fila = 0; $fila < 10; $fila++) {
                    $columna1 = 0;

                    echo "<tr class=>";
                    for ($columna = 0; $columna < 10; $columna++) {


                        echo "<td class=''>";

                        $colorquetoca  = rand(0, 4);
                        while ($colorquetoca == $coloranterior) {
                            $colorquetoca  = rand(0, 4);
                        }
                        if ($colorquetoca == $coloranterior) {
                            if ($colorquetoca == 4) {
                                $colorquetoca = 0;
                            } else {
                                $colorquetoca = $colorquetoca + 1;
                            }
                        }
                        $coloranterior = $colorquetoca;
                        if ($fila > 0) {
                            if ($columna1 == 0) {

                                $NoCasilla = $NoCasilla - 10;
                                $columna1 = 1;
                            } else {
                                if ($fila % 2 == 0) {

                                    $NoCasilla = $NoCasilla - 1;
                                } else {
                                    $NoCasilla = $NoCasilla + 1;
                                }
                            }
                        } else {

                            $NoCasilla = $NoCasilla - 1;
                        }

                        if ($jugador1 == $NoCasilla && $jugador1 > 0 && $jugador1 < 101) {
                            echo "<div class='ficha' style='width:60px; height:60px; border: solid; background-color:$colores[$colorquetoca]'><img src='../IMAGES/ficha1.png' alt='' style='z-index:2;  width:60px; height:60px;'><div>";
                        } else {

                            echo "<div class='ficha' style='width:60px; height:60px; border: solid; background-color:$colores[$colorquetoca]'><p>$NoCasilla</p></div>";
                        }
                    }
                    echo '</td>';
                }
                echo '</tr>';

                ?>

            </table>
    </div>
    </div>
    </div>





















    <br><br><br><br><br><br>



















































































</body>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


</html>