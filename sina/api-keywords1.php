<?php
$a = array();
for($i = 1; $i < 13; $i++) {
  $a[] = array(
    "key" => "关键词".$i,
    "flash" => rand(1000, 2000),
    "statuses" => rand(200, 300),
    "pos" => rand(1,100),
    "neu" => rand(1,100),
    "neg" => rand(1,100),
  );
}
echo json_encode($a)
?>
