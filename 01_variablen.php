<?php
// Ein PHP Abschnitt muss immer mit <?php eröffnet werden

// eine einfache Ausgabe über PHP
echo 'Hallo Welt';

// In Variablen können Werte gespeichert werden.
// Variablen dürfen NICHT mit Zahlen beginnen, Leerzeichen oder Sonderzeichen enthalten

$katze = "Tom";
$maus = "Jerry";

// "echo" gibt einfach den Inhalt von Variablen oder auch einfachen Strings aus
echo '<p>' . $katze . " jagt " .$maus . " durch den Garten.</p>";

?>

<!-- Man kann auch jederzeit HTML mit PHP kombinieren, wichtig ist hier die Einhaltung einer korrekten Schreibweise -->
<div><?php echo $maus; ?> hat aber keine Angst vor <?php echo $katze; ?>.</div>