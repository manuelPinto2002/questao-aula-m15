<?php
if (isset($_POST['dimensao'])>0 && isset($_POST['txt_inicio'])>0 && isset($_POST['txt_fim'])>0 && isset($_POST['txt_pesquisar'])>0 && isset($_POST['ordem'])>0) {

$dimens=$_POST['dimensao'];
$inicio=$_POST['txt_inicio'];
$fim=$_POST['txt_fim'];
$pesquisar=$_POST['txt_pesquisar'];
$ordem=$_POST['ordem'];
$soma=0;
$produto=0;
$media=0;
echo 'Valores Gerados para Array: ';
for ($i=0; $i<$dimens ; $i++) { 
	$num[$i] = rand($inicio,$fim);
	echo $num[$i].' ';
	$soma=$soma+$num[$i];
	$produto=$soma*$num[$i];
	$media=$soma/$dimens;
}
foreach ($num as $chave => $num) {
	if ($pesquisar==$num) {
		$chave=$chave+1;
		echo "<br>";
		echo "O valor ".$pesquisar." encontra-se na posicao ".$chave. " do vetor. <br>";
	}
	

}
echo "soma é ".$soma."<br>";
echo "produto é ".$produto."<br>";
echo "media é ".$media."<br>";


/*if($ordem==1){
	echo "ordem Crescente";
	for ($i=0; $i <$dimens ; $i++) { 
		
	}*/
}


  ?>