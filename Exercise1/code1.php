<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
?>

<?php
echo "<table border =\"1\" style='border-collapse: collapse'>";
for ($i = 1; $i < 101; $i++) {
  echo "<tr> \n";
  for ($j = 1; $j < 101; $j++) {
    $x = $j * $i;
    echo "<td>$x</td> \n";
  }
  echo "</tr>";
}
echo "<table>";
?>