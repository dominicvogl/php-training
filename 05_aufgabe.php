<?php
// Ein PHP Abschnitt muss immer mit <?php eröffnet werden

// Man kann auch Arrays in einen Array schreiben, so bekommt man einen Multidimensionalen Array. Das kommt einen Post Loop aus Wordpress schon relativ nahe.
$posts = array(
	array(
		"title"   => "Das ist die Überschrift",
		"content" => "Das ist ein ganz toller Inhalt, welcher ausgegeben werden sol"
	),
	array(
		"title"   => "Hello World",
		"content" => "Na herzlich willkommen auf der Welt"
	),
	array(
		"title"   => "Überschrift",
		"content" => "Ja lass uns das mal probieren ;-)"
	)
);

/**
 * Aufgabe
 * Schreibe eine Funktion, welche alle Posts aus dem obigen Array in einer Liste ausgibt.
 * Dabei sollen der "title" als "<h2>" und "content" als "<p>" ausgezeichnet sein, ausserdem soll die Funktion eine Alternative Ausgabe wie "Es wurden leider keine Posts gefunden", wenn der übergebene Array leer ist
 */

function render_list($array = array()) {

	$result = 'Es wurden leider keine Posts gefunden';

	if(empty($array)) {
		return $result;
	}

	$result = '<ul>';

	foreach ($array as $item) {

		 $result .= '<li><h2>'. $item["title"].'</h2><p>'.$item["content"].'</p></li>';

	}
	$result .= '</ul>';

	return $result;

}

echo render_list($posts);