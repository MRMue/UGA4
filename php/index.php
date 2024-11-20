<?php
$z = -1;
date_default_timezone_set("Europe/Berlin");
$datetime = null;
$menu = array();
$menu[$z+=1]= array("start","Start");
$menu[$z+=1]= array("tab", "Tabelle");
$menu[$z+=1]= array("txt", "Text");
$menu[$z+=1]= array("post", "Post");
$menu[$z+=1]= array("lnk", "Links");
$menu[$z+=1]= array("script", "Skript");
$menu[$z+=1]= array("opt", "OOPtionen");
$menu[$z+=1]= array("lotto", "Lotto");
$menuHtml = null;
$found = false;
$H = count($menu);
$title = null;
$year = date("Y");

  if(isset($_GET['was'])) {
    $file = $_GET['was'];
    for ($i=0; $i < $H; $i++) { 
      if ($file == $menu[$i][0]) {
        $found = true;
        break;
      }
    }  
  }  
  else {
    $file = 'start';
  }

  if (!$found) {
    $file = $menu[0][0];
  }

for ($i=0; $i < $H; $i++) { 
  $class = "";
  if ($file == $menu[$i][0]) {
    $class =  " class='act'";
    $title = $menu[$i][1];
  }
  $menuHtml .= "<a href='index.php?was=" . $menu[$i][0] . "'". $class . ">" . $menu[$i][1] . "</a> \n";
}

if ($file == $menu[0][0]) {
  $datetime = "<div style='float:left'>" . date("d.m.Y H:i:s") . "</div>";
}
?>

<!DOCTYPE html>
<html lang="de">

<head>
  <title> <?php echo $title;?></title>
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
  <div ID="header">
    <h1>Hallöchen</h1>
  </div>
  <div ID="menu">
  <?php echo $menuHtml;?>
  </div>
  <div ID="content">
    <?php include($file . '.php');?>
  </div>
  <div ID="footer">
  <?php
    echo $datetime; 
    echo $year . " © Erstellt von mir";
    ?>
  </div>
</body>

</html>