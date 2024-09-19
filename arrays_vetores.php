<?php
// Arrays indexados
$frutas = ["Maçã", "Banana", "Laranja"];
// Saida
echo $frutas[0]; // Saída: Maçã
// Modificando
$frutas[1] = "Melancia";
// Adicionando
$frutas[] = "Manga"; 

// Arrays associativos
$pessoa = [
    "nome" => "Arthur",
    "idade" => 16,
    "cidade" =>"Regente Feijó"];
//Saida 
echo $pessoa["nome"]; //Saida: Arthur
// Modificando
$pessoa["nome"] = "Pedro";
// Adicionando
$pessoa["país"] = "Brasil";

// Arrays Multidimensionais
$matriz = array(
    array(1, 2, 3),
    array(4, 5, 6),
    array(7, 8, 9)
);
// Saida
echo $matriz[0][0]; // Saída: 1
echo $matriz[1][2]; // Saída: 6

// Arrays associativos multidimensionais
$pessoas = array(
    "Arthur" => array(
        "idade" => 16,
        "cidade" => "São Paulo"
    ),
    "Beatriz" => array(
        "idade" => 18,
        "cidade" => "Rio de Janeiro"
    )
);
// Saida
echo $pessoas["Arthur"]["cidade"];  // Saída: São Paulo

?>