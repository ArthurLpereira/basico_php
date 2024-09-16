<!-- Entrada: Existem algumas formas de receber dados  -->
<!-- Formulario HTML, a pessoa preenche o fomulario, e assim que enviar as informações são enviadas pelo metodo post.-->
<html>
    <body>
        <form action="" method="post">
            <label for="nome">nome</label>
            <input type="text" name="nome" id="nome">
            <button type="submit">Enviar</button>
        </form>
    </body>
</html>
<?php
//  Utilizando o método POST,os dados são enviados no corpo da requisição HTTP, invisíveis na URL. Usado para envio de dados mais seguros, como login e cadastro. 
$nome = $_POST['nome'];
//  Utilizando GET,os dados são enviados como parte da URL. Usado quando os dados não são sensíveis, como em buscas ou filtros.
$nome = $_GET['nome'];
?>


<!-- Saida -->
<?php
$exibir = 'Olá, mundo';
// echo: a função mais usada para gerar saída. Ela pode exibir strings, números e até combinações de variáveis.
echo $exibir;
echo '<br>';
// print
print $exibir;
print '<br>';
// print_r: Usada para imprimir arrays e objetos de forma legivel, e util para debug
$frutas = ["Maçã", "Melancia", "Manga"];
print_r($frutas);
echo "<br>";
// var_dump: Exibe informações detalhadas sobre variáveis, incluindo tipo e valor. Muito útil para debug.
var_dump($exibir);
echo "<br>";
// printf:Permite formatar a saída de forma mais precisa
$nome = "Arthur";
$idade = 16;
$altura = 1.80;
printf("Nome: %s, Idade: %d, Altura: %.2f", $nome, $idade, $altura);
// %s: Substituído por "Arthur" (uma string).
// %d: Substituído por 16 (um número inteiro).
// %.2f: Substituído por 1.80 (um número decimal com 2 casas decimais). O .2 após o %f indica que queremos duas casas decimais.
?>