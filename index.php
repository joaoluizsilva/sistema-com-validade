<?php 

require __DIR__ . "/vendor/autoload.php";
echo '<pre>';
var_dump($_GET);
echo '<hr>';
print_r($_GET);
print_r($_SERVER['REQUEST_URI']);
echo '</pre>';


die;

echo "olha mundo";
echo '<br>';

echo rand(4,100);

echo '<br>';
$numero = 20;
	$gera = rand(1,100);

	if($gera == $numero) {
		echo "Você venceu com o número: ".$numero;
	} else {
		echo "Você perdeu, tente novamente.";
        }