<?php
$a = array();
for($i = 1; $i <= 5; $i++) {
  $a[] = array(
    "关键词".$i,
    rand(1, 100)
  );
}
echo json_encode($a)
?>
