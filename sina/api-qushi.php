<?php
$a = array();
for($i = 1; $i <= 8; $i++) {
  for($j = 1; $j <= 7; $j++) {
    $a[] = array(
      "date" => mktime(0, 0, 0, 1, $j, 2013)*1000,
      "id" => $i,
      "new_fans_count" => rand(100, 200),
      "new_fans_quality" => rand(1,100)/100
    );
  }
}
echo json_encode($a)
?>
