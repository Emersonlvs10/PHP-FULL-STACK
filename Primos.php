<?php
 function Primos ($inicial,$final){

    $num=0;
    while ($num<($final-$inicial)-1){
        $arr[$num] = $inicial+1+$num;
$num+=1;
  
}

$primos[]=null;

    $cont=0;
foreach ($arr as $chave =>$valor) {
$divisor=0;
   for($n=2;$n<=$valor;$n++){
       if($valor%$n==0){
        $divisor +=1;
       }
    }
 
    if($divisor==1){
        $primos[$cont]=$valor;
        $cont++;
   }

}
return $primos;
 }



print_r(Primos(10,100)) ;
?>