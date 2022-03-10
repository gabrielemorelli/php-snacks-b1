<?php

$email = $_GET['email'];
$name = $_GET['name'];
$age = $_GET['age'];


if (!empty($email) && !empty($name) &&!empty($age)){

    if (strpos($email, '@') !==false && strpos($email, '.') !==false && strlen($name) > 3 && is_numeric($age) !==false) {
        echo "accesso riuscito";
       
    } else {
        echo "accesso non riuscito";
    }
} else {
    echo 'campo vuoto';
}




echo '<h2> Stringa da dividere </h2>';

$stringaDaDividere ='Lorem  is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.';

$stringaEsplosa = explode(".", $stringaDaDividere);

for($i=0; $i<count($stringaEsplosa); $i++){
    echo $stringaEsplosa[$i]. "<br>";
}


?>




