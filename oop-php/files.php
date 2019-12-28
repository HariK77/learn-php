<?php



echo __FILE__."<br>";

echo __LINE__."<br>";

echo __DIR__."<br>";


if (file_exists(__DIR__)) {
  echo "yes";
}

echo "<br><br>";

if (is_file(__DIR__)) {
  echo "yes";
} else {
  echo "no";
}

echo "<br><br>";

if (is_dir(__DIR__)) {
  echo "yes";
} else {
  echo "no";
}

echo "<br><br>";

if (is_file(__FILE__)) {
  echo "yes";
} else {
  echo "no";
}



?>
