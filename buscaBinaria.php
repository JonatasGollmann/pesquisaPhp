<?php


////  Autor: Jonatas F. Gollmann
///   Data: 20/04/2021
//    Eng. Computação

//Organizei o array primeiro
$aSelec = array(55,22,12,4,3,2,9,0,1,2);

$n = count($aSelec);
for ($i=0; $i < $n-1; $i++){
	$min = $i;
	for ($j=$i+1; $j<$n; $j++){
		if ($aSelec[$min] > $aSelec[$j]){
			$min = $j;
		}
	}
	$temp = $aSelec[$i];
	$aSelec[$i]=$aSelec[$min];
	$aSelec[$min]= $temp;
}
$arrayPesquisa = $aSelec;

$valorB = 1;
$iteraçoes = 0;

//depois fiz a busca.

while (is_array($arrayPesquisa)) {
	$primeiro = 0;
	$ultima = count($arrayPesquisa)-1;
	$meio = floor(count($arrayPesquisa)/2);
	$iteraçoes ++;

	if($arrayPesquisa[$meio] > $valorB){
		$arrayTemp = Array();
		for($i = $primeiro; $i < $meio; $i++){
			$arrayTemp[] = $arrayPesquisa[$i];
		}
	$arrayPesquisa = $arrayTemp;	
	}elseif ($arrayPesquisa[$meio] < $valorB) {
		$arrayTemp = Array();
		for($i = $meio; $i <= $ultima; $i++){
			$arrayTemp[] = $arrayPesquisa[$i];

		}
		 $arrayPesquisa = $arrayTemp;


	}else{
		$arrayPesquisa = "Encontrou valor $arrayPesquisa[$meio]";
	}
	if ($primeiro == $ultima and is_array($arrayPesquisa)){
		$arrayPesquisa = '-1';
	}
	
}
echo $arrayPesquisa.'<br>';
echo $iteraçoes.' iterações';

?>
