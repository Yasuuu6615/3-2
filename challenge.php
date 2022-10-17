<h1>チャレンジ問題1</h1>
<?php
$fruits =["apple"=>"りんご", "orange"=>"みかん", "peach"=>"もも"];
foreach ($fruits as $key => $value) {
    echo "{$key}といったら{$value}<br>";
}
?>

<h1>チャレンジ問題</h1>
<?php
function volume($x, $y, $height){
  $volume = $x * $y * $height;
  echo $volume;
}

volume(5, 10, 8);

?>