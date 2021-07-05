<?php

echo 'Pesquisa Sequencial';
echo '<br>';


////  Autor: Jonatas F. Gollmann
///   Data: 20/04/2021
//    Eng. Computação

 $valorBusca = 1;
 $para = 0;

 $arrayPesquisa = array(55,22,12,4,3,2,9,0,1,2);

$iteraçoes = 0;
$tamA= count($arrayPesquisa);

     for($i=0;$i<=$tamA-1;$i++){
        $iteraçoes++;

         if($valorBusca == $arrayPesquisa[$i] ){

            $resultado = $i;
            
            $para = 1;
            break;
            


        }elseif($para!=1){

        	$resultado = '-1';
        	
        }

   }    

 if($resultado == '-1'){

    echo "Resultado não encontrado no array.";
  }else{

    echo "Busca do valor " .$valorBusca ." está na Chave " .$resultado .'<br>';
    echo "Foram feitas $iteraçoes iterações até encontrar o valor buscado.";
}


?>