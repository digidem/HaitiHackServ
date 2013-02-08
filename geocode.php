<?php

$address = "50,impasse percier,nazon,Port-au-Prince, Haiti";

$address = "Delmas, Haiti";


print "\n\n";
var_dump(geocode_address($address));


function geocode_address($address) {

  $address = urlencode($address);

  $format = "json";

  $url = "http://nominatim.openstreetmap.org/search?q=".$address.
    "&format=".$format;

  $json = file_get_contents($url);

  $results = json_decode($json);

  $result_count = count($results);

  $coordinates = array();  
  foreach($results as $i=>$result) {
    $lat = $result->lat;
    $lon = $result->lon;
    $display_name = $result->display_name;

    $coordinates[] = array(
      "lat"=>$lat, 
      "lon"=>$lon,
      "display_name"=>$display_name);
  }

  
  

  return $coordinates;
}

?>