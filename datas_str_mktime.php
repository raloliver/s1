<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?php 
$timestamp = date('Y-m-d H:i:s'); echo $timestamp.'<hr />';

echo date('d/m/Y  H:i:s',strtotime($timestamp)).'<hr />';

$nasc = date('d/m/Y',strtotime('01/09/1985'));
echo 'dia '.date('d',strtotime($nasc));
echo '<br />mês '.date('m',strtotime($nasc));
echo '<br />ano '.date('Y',strtotime($nasc)).'<hr />';

$value = 10;
$data = date('d/m/Y  H:i:s',strtotime($timestamp.''.$value.'years+3months+'.$value.'minutes'));
echo $data.'<hr />';

#$dataMe = mktime('horas','minutos','segundos','mes','dia','ano');
$dataExt = mktime(date('H'),date('i'),date('s'),date('m')+10,date('d'),date('Y'));
$dataMe	 = date('d/m/Y  H:i:s',$dataExt);
echo $dataExt.'<hr />';
echo $dataMe.'<hr />';
?>