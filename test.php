<?php 

$int = 100; // integer - Целое число
$float = 14.12; // float - Дробь 
$str = "Shone_Ratmir"; // string - строка
$list = array("Water", "Fire", "Air", "Earth", 5); // array - массив 

$list2 = array(
	"name" => "Shone",
	"surname" => "Ashimov",
	"age" => 17,
	"byear" => 2004,
	"education" => array(
		"school in 2021",
		"collage start in 2021 1 sep."
	)
);

echo $int;
echo "<hr>"; 
echo $float;
echo "<hr>";
echo $str;
echo "<hr>";
echo $list[2];
echo "<hr>";
echo "Finished ";
echo $list2["education"][0];
echo "<hr>";

$bule = true;
$bule2 = false;

echo "married: ";
echo $bule;