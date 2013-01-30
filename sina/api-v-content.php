<?php
$a = array();
for($i = 1; $i <= 8; $i++) {
  for($j = 1; $j <= 7; $j++) {
    $a[] = array(
      "comment_count" => rand(100, 200),
      "created_at" => mktime(0, 0, 0, 1, $j, 2013)*1000,
      "id" => $i,
      "repost_count" => rand(100, 200),
      "sm_flash_factor" => rand(100, 200),
      "imp1" => rand(100, 200),
      "imp2" => rand(100, 200)
    );
  }
}
echo json_encode($a)
?>

