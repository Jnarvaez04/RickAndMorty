<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://rickandmortyapi.com/api/character',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
));

$response = curl_exec($curl);

$API = json_decode($response, true);

curl_close($curl);
// echo $response;

?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mukta:wght@500;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../Pelis/CSS/Style-personajes.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Mukta:wght@500;800&display=swap" rel="stylesheet">
    <title>Personajes</title>
</head>

<body>
<!-- NAVBAR -->

<ul class="nav" id= "inicio">
        
        <a href="#inicio"><img class="rick" src="../Pelis/Access/titulo.png" alt="Titulo"></a>
    
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="http://localhost:8080/Pelis/Index.php">Episodios</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="http://localhost:8080/Pelis/Personajes.php">Personajes</a>
        </li>
    </ul>

    <h2 class="title">Personajes de Rick And Morty</h2>



<!-- CARDS -->


<div class="Container">

<?php



foreach ($API['results'] as $value) {

    $id = $value['id'];
    $nombre = $value['name'];
    $status = $value['status'];
    $species = $value['species'];
    $type = $value['type'];
    $gender = $value['gender'];
    $location = $value['location']['name'];
    $url = $value['url'];
   

    echo '<pre>';

    echo '</pre>'; 
?>
<form action="Detalle.php" method="POST">
    <div class="card" style="width: 18rem;">
    <input type="hidden" value="<?php echo $url?>" name="url">
    <img src="<?php echo $value ['image'] ?>" alt="Imagen">
  <div class="card-body">
    <h5 class="card-title"> <?php echo $nombre ?></h5>
    <p class="card-text"> <?php echo '<Strong>Id: </Strong>' .$id ?></p>
    <p class="card-text"> <?php echo '<Strong>Status: </Strong>' .$status ?></p>
    <p class="card-text"> <?php echo '<Strong>Species: </Strong>' .$species ?></p>
    <p class="card-text"> <?php echo '<Strong>Type: </Strong>'.$type ?></p>
    <p class="card-text"> <?php echo '<Strong>Gender: </Strong>'.$gender ?></p>
    <p class="card-text"> <?php echo '<strong>location: </strong>'.$location ?></p>
    <a href="http://localhost:8080/Pelis/DetallePersonaje.php"><button type="submit" class="btn btn-primary buton">Ver Personaje</button></a>
  
  </div>
    </div>
</form>



<?php } ?>
</div>



</body>

</html>

