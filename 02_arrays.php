<?php
// Ein PHP Abschnitt muss immer mit <?php eröffnet werden

// Man kann Informationen zu einem in Variablen, aber auch in sog. "Arrays" speichern und entsprechend ebenso darauf zugreifen.
$charakter = array(
   'katze' => 'Tom',
   'maus' => 'Jerry'
);

// "echo" gibt einfach den Inhalt von Variablen oder auch einfachen Strings aus
echo '<p>' . $charakter['katze'] . " jagt " .$charakter['maus'] . " durch den Garten.</p>";

?>

<!-- Man kann auch jederzeit HTML mit PHP kombinieren, wichtig ist hier die Einhaltung einer korrekten Schreibweise -->
<div><?php echo $charakter['maus']; ?> hat aber keine Angst vor <?php echo $charakter['katze']; ?>.</div>