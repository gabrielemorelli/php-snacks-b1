<?php

$email = $_GET['email'];
$name = $_GET['name'];
$age = $_GET['age'];

if (strpos($email, '@') !==false && strpos($email, '.') !==false){
    echo "L'indirizzo è valdio";
}else {
    echo "l'indirizzo non è valido";
}

echo '<h2> Stringa da dividere </h2>';

$stringaDaDividere ='Lorem  is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.';

$stringaEsplosa = explode(".", $stringaDaDividere);

var_dump($stringaEsplosa);


?>




