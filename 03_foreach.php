<?php
// Ein PHP Abschnitt muss immer mit <?php eröffnet werden

// Man kann Informationen zu einem in Variablen, aber auch in sog. "Arrays" speichern und entsprechend ebenso darauf zugreifen.
$charakter = array(
   'Katze' => 'Tom',
   'Maus' => 'Jerry',
   'Hund' => 'Goofy',
   'Ente' => 'Donald'
);

// Gib eine "unordered list" aus
echo '<ul>';

// Für jedes Element aus dem Array soll ein "list item" ausgegeben werden
foreach($charakter as $name) {
   echo '<li>'.$name.'</li>';
}

// Gib das Ende der "unordered list" aus
echo '</ul>';


// Man kann auch den Wert und den Schlüssel jedes Arrayitems ausgeben
// Gib eine "unordered list" aus
echo '<dl>';

// Für jedes Element aus dem Array soll ein "dt und dd" ausgegeben werden
foreach($charakter as $key => $value) {
	echo '<dt>'.$key.'</dt>';
	echo '<dd>'.$value.'</dd>';
}

// Gib das Ende der "unordered list" aus
echo '</dl>';
