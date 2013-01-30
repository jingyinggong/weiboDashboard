<?php
$a = array();
for($i = 1; $i < 4; $i++) {
  $a[] = array(
    "_id" => $i,
    "ccount" => rand(1, 100),
    "rcount" => rand(1, 100),
    "cdate" => "2013-01-01T00:13:00Z",
    "uid" => rand(1,100).$i,
    "name" => "你妹的".$i,
    "uimg" => "http://tp2.sinaimg.cn/1792159945/50/565184112".$i."/0",
    "text" => "你妹的微博发点什么呢？你他吗的是什么东西的内容，就是伪造的萨芬但是adsame发的撒娇奋斗了撒了电视剧啊法律都是",
    "pic" => "http://tp2.sinaimg.cn/1792159945/50/565184112".$i."/0",
    "key_id" => $i
  );
}
echo json_encode($a)
?>
