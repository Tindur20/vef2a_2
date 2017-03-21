<?php
if(isset($_POST['texti']) && isset($_POST['linkur'])) {
  $data =  $_POST['texti'] . ';' . $_POST['linkur'] . "\n";
  $contents = file_get_contents('myndir.json');
  $contentsDecoded = json_decode($contents, true);
  $contentsDecoded[count($contentsDecoded)+1]=$data;
  $json = json_encode($contentsDecoded);
  file_put_contents('myndir.json', $json);
}
else {
   die('no post data to process');
}
echo "Myndinni hefur verið bætt við";
echo "<a href=\"http://tsuts.tskoli.is/2t/2811992349/vef2a/Verkefni%206/index.php\">Fara til baka hérna</a>";
?>