<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>
<style>
    body {
        background-image: url(../IMAGES/fondologi.png);
    }
</style>

<body>

    <h1 class="text-center ">BIENVENIDOS AL JUEGO DE SERPIENTES Y ESCALERAS</h1>

    <div class="row p-5 text-dark">

        <div class="col">
            <h1>JUGADOR 1</h1>
            <form class="bg-danger p-5" method="post" id="form1" action="juego.php">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">NOMBRE JUGADOR 1</label>
                    <input type="text" class="form-control" id="jugador11" name="jugador11" aria-describedby="emailHelp">

                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">EDAD</label>
                    <input type="number" class="form-control" id="exampleInputPassword1">
                </div>


        </div>

        <div class="col">
            <h1>JUGADOR 2</h1>
            <div class="bg-success p-5">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">NOMBRE JUGADOR 2</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="jugador22" aria-describedby="emailHelp">

                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">EDAD</label>
                    <input type="number" class="form-control" id="exampleInputPassword1">
                </div>
            </div>


        </div>
        <div class="col">
            <h1>jUGADOR 3</h1>
            <div class="bg-primary p-5">


                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">NOMBRE JUGADOR 3 </label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="jugador33" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">EDAD</label>
                    <input type="number" class="form-control" id="exampleInputPassword1">

                </div>



            </div>


        </div>

    </div>
    <div class="row text-center">
        <div class="col"></div>

        <div class="col">
            <button from="form1" type="submit" class="btn btn-primary">Submit</button>
        </div>

        <div class="col"></div>
    </div>
    </form>



 






</body>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>