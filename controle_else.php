<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?php 
$a = 5;
$b = 5;
$c = 8;

if ($a == 5) {
	if ($b == 5) {
		echo 'A é = a 5 e B é = a 5';
	}else{
		echo 'A é = a 5 porém B é diferente';
	}
		if ($c == 8):
			echo ' <strong>O C é = a 8</strong>';
		endif;

}else{
	echo 'A é diferente de 5';
}

if ($a == 1) {
	echo '<hr />'.'1';
}else if($a == 2){
	echo '2';
}else{
	echo '<hr />'.'FALSE';
}
 ?>

