<!DOCTYPE html>
<html lang="de">

<head>
  <title>PHP</title>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width" />
  <!--
      Need a visual blank slate?
      Remove all code in `styles.css`!
    -->
  <link rel="stylesheet" href="styles.css" />
  <script type="module" src="script.js"></script>
</head>

<body>
  <h1>PHP-Test</h1>

<?php
echo "<h4>Dieser Text wird von PHP übergeben!</h4>";

$x = 17;
$y = 4;
$z = $x + $y;

echo $z . "<br>";

$T1 = "Jochen geht";
$t2 = "mal mit dem Hund raus.";

echo $T1 . " " . $y . "- " . $t2;

echo "<hr>";

$Eis = true;

if($Eis){
  echo "<script>alert('Es gibt Eis')</script>";
}
else{
 echo "Kein Eis! :(";
}
?>
</body>

</html>