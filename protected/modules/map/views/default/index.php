<?php
  if (Yii::app()->user->isGuest) {
    // something else needs to happen
    echo 'You have to log in to interact with the map';
  } else {
    //$BASE_URL="http://localhost:8000/";
    $BASE_URL="http://digidem.github.com/HaitiHackMap/";
    $this->layout = 'simple';
?>
    <div id="app"></div>
    <link rel="stylesheet" href="<?php print $BASE_URL ?>styles/main.css">
    <link rel="stylesheet" href="<?php print $BASE_URL ?>styles/leaflet.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="<?php print $BASE_URL ?>scripts/vendor/jquery.min.js"><\/script>')</script>
    <script src="<?php print $BASE_URL ?>scripts/plugins.js"></script>

    <script>
      L.Icon.Default.imagePath = "<?php print $BASE_URL ?>images"
    </script>
<?php
  }
?>
