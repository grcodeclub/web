<?php
// Εμφάνιση λειτουργικού συστήματος
echo 'Λειτουργικό σύστημα: ' . php_uname('s') . PHP_EOL;
echo '<br>';
// Εμφάνιση ονόματος υπολογιστή
echo 'Όνομα υπολογιστή: ' . php_uname('n') . PHP_EOL;
echo '<br>';
// Εμφάνιση έκδοσης λειτουργικού συστήματος
echo 'Έκδοση λειτουργικού συστήματος: ' . php_uname('v') . PHP_EOL;
echo '<br>';
// Εμφάνιση αρχιτεκτονικής υπολογιστή
echo 'Αρχιτεκτονική υπολογιστή: ' . php_uname('m') . PHP_EOL;
echo '<br>';
echo 'Έκδοση PHP: ' . phpversion() . PHP_EOL;
echo '<br>';
echo 'Μέγιστο όριο μνήμης: ' . ini_get('memory_limit') . PHP_EOL;
?>
