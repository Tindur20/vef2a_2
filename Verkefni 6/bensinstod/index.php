<?php 
  $url = "http://apis.is/petrol";
  $json = file_get_contents($url);
  $array = json_decode($json, true);
  arsort($array['results']);
?>

<html>
<body>
  <link rel="stylesheet" type="text/css" href="main.css">
<table>
  <tr>
    <th class="first">Fyrirtæki</th>
    <th class="first">Staður</th>
    <th class="first">bensin95</th>
    <th class="first">Dísel</th>
  </tr>
<?php
  foreach ($array['results'] as $key => $value) {
    echo "<tr>";
    echo "<th>" . $value['company'] . "</th>";
    echo '<th><a href="http://www.google.com/maps/place/' . $value['geo']['lat'] . ',' . $value['geo']['lon'] . '" target="_blank">' . $value['name'] . '</a></th>';
    echo "<th>" . $value['bensin95'] . "</th>";
    echo "<th>" . $value['diesel'] . "</th>";
    echo "<tr>";
  }
 ?>
</table>

</body>
</html>