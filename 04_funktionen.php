<?php
// Ein PHP Abschnitt muss immer mit <?php eröffnet werden

// Man kann Informationen zu einem in Variablen, aber auch in sog. "Arrays" speichern und entsprechend ebenso darauf zugreifen.
$charakter = array(
	'Katze' => 'Tom',
	'Maus' => 'Jerry',
	'Hund' => 'Goofy',
	'Ente' => 'Donald'
);

// mittel Funktionen kann man Abläufe in PHP "aufrufbar" und dynamisch machen
// zunächst erstellen wir eine Funktion
function list_items($array = array()) {

	// es wird geprüft ob der array Inhalte hat, wenn nicht, werden die Standardwerte in die Variable übernommen
   if(empty($array)) {
      $array = array(
	      'Maus' => 'Micky',
         'Hund' => 'Goofy'
      );
   }

	// wir machen aus dem Array eine Komma separierte Liste und speichern das Ergebnis in eine Variable
	$result = implode(', ', $array);

	// wir geben das Ergebnis welche in $results gespeichert ist zurück
	return $result;

}


// Diese Funktion rufen wir anschließend auf und übergeben unseren bekannten Array, gleichzeitig lassen wir das Ergebnis gleich ausgeben
echo '<div>' . list_items() . '</div>';
echo '<div>' . list_items($charakter) . '</div>';