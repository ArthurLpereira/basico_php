<?php
// for: utilizado quando já sabemos o numero necessario de interações
    for($i = 1; $i <=5; $i++){
    echo "Valor de i é " . $i . "<br>";
}
// while: Executa o loop enquanto o contição for verdadeira, e a condição é verificada no começo do loop
$contador_while = 1;
while ($contador_while <=5){
    echo "Contador: " . $contador_while . "<br>";
    $contador_while++;
}

// do while: Parecido com o while porem a condição é verificada no final do loop
$contador_do_while = 1;
do{
    echo 'Contador: ' . $contador_do_while . "<br>";
    $contador_do_while++;
} while($contador_do_while <=5);

// Usado para percorrer arrays. Ele vai iterar sobre cada valor no array.
$frutas = ["Maçã", "Melancia", "Manga"];
foreach ($frutas as $frutas){
    echo "A fruta é: " . $frutas . "<br>";
}
?>