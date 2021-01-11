<?php
/**
 * @package meteo
 * @version 1
 */
/*
Plugin Name: Meteo
Plugin URI: http://wordpress.org/plugins/meteo/
Description: Affiche la méteo d'Anduze
Author: yjawad
Version: 1.7.2
Author URI: 
*/

add_action( 'wp_footer', 'meteo' );


function meteo() {
	$url = 'http://api.openweathermap.org/data/2.5/weather?q=Ales&lang=fr&appid=6c59ae77849ea8b81894c103f063c792';
$raw = file_get_contents($url);
$json = json_decode($raw);
$ciel = $json->weather[0]->description;
$icone = $json->weather[0]->icon;
$temp = $json->main->temp - 273.15;

    echo "
    <div class='meteo'>
		<h2>Météo de Prévenchères : </h2>
		<h3>  Température : $temp °c</h3>
		</div>
    ";
};


?>

