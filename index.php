

<?php
$aluno=7;
$mensagem="";

 if($aluno >= 16 && $aluno <=65){
	echo $mensagem="Pode usar medicamento";
}

elseif($aluno > 65){
	echo $mensagem="Tem que ter restriçao";
}

elseif($aluno < 10){
	echo $mensagem="Proibido de uso de medicamento";	
}
else
?>

<?php
$a = 5;                //Inter
$b = 3.14;             //Float
$c = "hoje";           //String
$d = true;             //Boleano
$e = null;             //null

// Conversão para String
$a =(string) $a; 
$b =(string) $b; 
$c =(string) $c; 
$d =(string) $d; 
$e =(string) $e;

//Mostra ao usuario

var_dump ($a); echo"<br>";
var_dump ($b); echo"<br>";
var_dump ($c); echo"<br>";
var_dump ($d); echo"<br>";
var_dump ($e);  echo"<br>";
?>

<?php
$a = array ("volvo", "BMW", "Toyota"); //array indexado 
//$b = array ("Peter" ="30", "Joao" >= "40", "Carlos" >="50");
//array associativo

$a = (object) $a;
$b = (object) $b;
echo"<br>";

var_dump($a);echo "<br>";
var_dump($b);echo "<br>";

?>

<?php
echo (pi());
echo "<br>";
echo (min(0, 20, 130, -10,-230)). "<br>";
echo (max(0, 25, -230, 100, -530)). "<br>";
echo (sqrt(64)) . "<br>";
echo (round(0.60)) . "<br>";
?>
