<?php

//Aqui escribimos el nombre de la localidad en nuestro caso escribimos Republica Dominicana
$city_name = 'London';

//Aqui va la llave que su proveedor de api le facilita, en mi caso voy a usar la mia propia
$api_key = '4f64878fd4543de8e1a41e856131ef25';

//Esta es la conexion con la api que me facilita la pagina del clima openweather
$api_url = 'http://api.openweathermap.org/data/2.5/weather?q=' . $city_name . '&appid=' . $api_key;

//Este es el paquete json que nos devuelve nuestra peticion
$weather_data = json_decode(file_get_contents($api_url), true);


// echo "<pre>";
// print_r($weather_data);

//Ojo como un archivo json no es mas que un array, vamos a solo seleccionar lo que necesitamos, ya que es un archivo grande
$temperatura = $weather_data['main']['temp'];
$temperatura_en_celcius = round($temperatura - 273.15);

$currentTime = date("y/m/d");
$descripcion = $weather_data['weather']['0']['description'];



?>

<!--Aqui cree mi estructura html para mostrar los datos que me arroja la api-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="report-container">
        <h2>Aplicacion Del Clima</h2>
        <h4><?php echo $city_name?></h4>
        <div class="time">
            <div><?php echo $currentTime;?></div>
            <div><?php echo $descripcion;?></div>
        </div>
        <div class="weather-forecast">
            <img src="http://openweathermap.org/img/w/<?php echo $weather_data['weather']['0']['icon']?>.png"
            class ="weather-icon"/> <?php echo $temperatura_en_celcius;?>&deg;C<span
            class ="min-temperature"><?php echo $temperatura_en_celcius;?>&deg;C</span>
        </div>
        <div class="time">
            <div>Humedad: <?php echo $weather_data['main']['humidity'];?></div>
        </div>
</br>
        <h5>ingre el pais</h5>

        <form action="webApi.php" method="post">
            <input type="text" name="pais" id="">
            <input type="submit" value="Enviar">
    </form>
    </div>

</body>
</html>