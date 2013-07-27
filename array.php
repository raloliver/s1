<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?php 
$array_curso = array('nosso', "curso", "de", "php");
print_r($array_curso);
echo '<hr />';
$join = implode(" ",$array_curso);
echo $join;

echo '<hr />';
echo '<hr />';

$string = "nosso curso de php";
$string = explode(" ", $string);
print_r($string);

?>