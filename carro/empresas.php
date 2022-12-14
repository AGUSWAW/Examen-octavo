<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<!-- Comienza estilo de fondo CSS -->
    <style>
*{
  margin: 0;
  padding: 0;
  font-family: 'Poppins', sans-serif;
}

body{   
  
  background-image: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
  color:white;
  
background-size: 400% 400%;
animation: gradient 15s ease infinite;
height: 08vh;

background-image: url(screnshot/empre.jpg);
  background-size: cover; 
  background-repeat: no-repeat;
  background-position: center;
  background-attachment: fixed;
  color: #4b1a48;  

}





@keyframes gradient {
0% {
background-position: 0% 50%;
    }
50% {
background-position: 100% 50%;
    }
100% {
background-position: 0% 50%;
}

  }


    

</style>  
<!-- Finaliza estilo de fondo CSS -->



    <title>EMPRESA</title>
  </head>
  <body>

<div class="container">

 <!-- inicio formulario -->
 <form action="action/isertempresa.php" method="POST">
  <div class="mb-3">
  <br>
       <label class="form-label">Nombre Empresa</label>
      <input type="text" name="inputNombre" class="form-control">
    </div>
     <button type="submit" name="enviar" class="btn btn-primary">Enviar</button>
</form>
<!-- fin formulario -->

<br>
<!-- inicio tabla -->
  <table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Eliminar</th>
      <th scope="col">Editar</th>
    </tr>
  </thead>
  <tbody>

    <?php
        //include es importa archio de conexion
        include('connection/connection.php');
        //variable para enlistar toda la tabla de empresa
        $consulta = "SELECT * FROM empresa";
        //query de conexcion y query de listado
        $resultado = mysqli_query($connection,$consulta);
        //mientras haya algo de la tabla, seguria enlistando
        while ($fila = mysqli_fetch_array($resultado)){
    ?>  
    
          <tr>
                <th scope="row"><?php echo $fila["codigo"] ?></th>
                <td><?php echo $fila["nombre"] ?></td>
                <td><a href="action/deleteempresa.php?id=<?php echo $fila["codigo"] ?>" class="btn btn-danger">Eliminar</a></td>    
                <td><a href="action/editarempresa.php?id=<?php echo $fila["codigo"] ?>" class="btn btn-warning">Editar</a></td>                     
          </tr>
          <?php } //cierre while ?>

  </tbody>
</table>

</div>
<!-- final tabla empresa -->


    <!-- <h1>Hello, world!</h1> -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

   
  </body>
</html>