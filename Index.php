<?php

$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://rickandmortyapi.com/api/episode',
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


// echo '<pre>';
// print_r($API);
// echo '</pre>';

curl_close($curl);

// echo $response;


 $imagenes = array (

    "https://m.media-amazon.com/images/M/MV5BOGZmYzk5ZmYtZGE0Mi00ZWQ2LTk3N2UtYzliOWMzNGU2YmIwXkEyXkFqcGdeQXVyNjc0NTIwNTU@._V1_.jpg",
    "https://pm1.narvii.com/6486/51a030e8bdafba3c0cac3eb8bc1ffb00185d549b_hq.jpg",
    "https://i.ytimg.com/vi/2B8bxR8ugZA/maxresdefault.jpg",
    "http://basementrejects.com/wp-content/uploads/2016/04/rick-and-morty-season-1-4-m-night-shaym-aliens-virtual-reality-jerry-dark-matter-david-cross-review-episode-guide-list.jpg",
    "https://www.eltemplodelguerrero.com/blog/wp-content/uploads/2018/06/5-mejores-episodios-Rick-y-Morty-El-Templo-del-Guerrero-meeseeks.jpg",
    "https://m.media-amazon.com/images/M/MV5BYTRhMjhjMTEtZTY0MC00NjAyLWJkNDQtZmYzN2FjNDM1NTI0XkEyXkFqcGdeQXVyNTAyODkwOQ@@._V1_.jpg",
    "https://m.media-amazon.com/images/M/MV5BOThkZWYzNDYtZTUxYS00MDM5LWI2MTEtZjYxOTBkZDU0MGIxXkEyXkFqcGdeQXVyNjc0NTIwNTU@._V1_.jpg",
    "https://m.media-amazon.com/images/M/MV5BNzM4MmM3MjctYjE0Yy00NzVhLThkNmQtNjBhNWU2MDc1ZjNhXkEyXkFqcGdeQXVyNTAyODkwOQ@@._V1_.jpg",
    "https://m.media-amazon.com/images/M/MV5BYzRkOTQ3MzctZmY0YS00NDEwLWE4NzctYTVlZjJkZTVlYzM1XkEyXkFqcGdeQXVyNjc0NTIwNTU@._V1_.jpg",
    "https://m.media-amazon.com/images/M/MV5BZWRhYzZhZjMtMjQxMi00OWVkLWEzNjItMjE3ZmZjM2QwZWU2L2ltYWdlXkEyXkFqcGdeQXVyNDk3OTIwNTU@._V1_.jpg",
    "https://m.media-amazon.com/images/M/MV5BMWNiNDZhYWMtNjMyNi00MTYwLWEwZjktNDhmMTFlMjc3ZjVhL2ltYWdlXkEyXkFqcGdeQXVyNDk3OTIwNTU@._V1_.jpg",
    "https://m.media-amazon.com/images/M/MV5BOGMxMzM4MTEtNzViZS00YTRlLThjOGYtOGEzZWU3MTkxMGM0XkEyXkFqcGdeQXVyNTAyODkwOQ@@._V1_.jpg",
    "https://m.media-amazon.com/images/M/MV5BMmM3MTg5ZjQtNDUxMi00OWQ3LTkxMmUtYTRkNTI5MGY5MDdiXkEyXkFqcGdeQXVyNjc0NTIwNTU@._V1_.jpg",
    "https://www.denofgeek.com/wp-content/uploads/2020/02/rm3-1.png",
    "https://m.media-amazon.com/images/M/MV5BOWFjNzJhMjYtNTFlMi00MThlLWE4MDItYjg0ODYxZWZkNzZjXkEyXkFqcGdeQXVyNTkyMjE3NDU@._V1_.jpg",
    "https://video-images.vice.com/articles/5b16fc694329580008f7d7a6/social_lede/1528233309831-rickandmorty.jpeg?crop=1xw:0.84375xh;center,center&resize=1200:*",
    "https://m.media-amazon.com/images/M/MV5BMGZkZWJkZTctY2U0OC00Nzk1LTg5ZmItYTNkZDI5YWUwYzY0XkEyXkFqcGdeQXVyODkxNzAwMDI@._V1_.jpg",
    "https://rickandmortypod.com/wp-content/uploads/2018/11/tiny-rick.jpg",
    "https://m.media-amazon.com/images/M/MV5BZDRkMzQ0YjgtNGRhZC00YjQ2LTgyMzgtNWUwZGM2N2U4YWQyXkEyXkFqcGdeQXVyNjgyOTUyNDc@._V1_.jpg",
    "https://asset.vg247.com/thepurge.jpg/BROK/thumbnail/1600x900/quality/100/thepurge.jpg",

 )
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
    <link rel="stylesheet" href="../Pelis/CSS/Style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Mukta:wght@500;800&display=swap" rel="stylesheet">
    <title>Episodios</title>
</head>

<body>
<!-- NAVBAR -->

<ul class="nav">
        
        <img class="rick" src="../Pelis/Access/titulo.png" alt="Titulo">
    
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="http://localhost:8080/Pelis/Index.php">Episodios</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="http://localhost:8080/Pelis/Personajes.php">Personajes</a>
        </li>
    </ul>

    <h2 class="title">Episodios de Rick And Morty</h2>



<!-- CARDS -->


<div class="Container">
<?php

$i = 0;

foreach ($API['results'] as $value) {

    $id = $value['id'];
    $nombre = $value['name'];
    $dia_de_lanzamientos = $value['air_date'];
    $episodios = $value['episode'];
    $url = $value['url'];

    echo '<pre>';

    echo '</pre>'; 
?>
<form action="Detalle.php" method="POST">
    <div class="card" style="width: 18rem;">
    <input type="hidden" value="<?php echo $url ?>" name="url">
  <?php echo '<img src="' . $imagenes [$i] .'" class="card-img-top">';?>
  <div class="card-body">
    <h5 class="card-title">Episode <?php echo $id. ' / ' .$nombre?></h5>
    <p class="card-text"><Strong>Air Date: </Strong> <?php echo $dia_de_lanzamientos ?></p>
    <button type="submit" class="btn btn-primary">Ir al Episodio</button>
  </div>
    </div>
</form>

<?php
$i = $i + 1;
?>

<?php } ?>
</div>



</body>

</html>



 
