<!DOCTYPE html>
<html lang="pt-br">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    <title>Principal</title>
</head>
 
<body>
<?php
$outraDivisoria = array_fill(0, 7, "<img src='img/linha.webp' id='divisoria'>");
$tarefas = array("Trabalho de Fred", "Trabalho de Ramon", "Trabalho de Luizinho", "Site de Daisy", "Formulário de Paloma");
$compraSemana = array ("Carregador", "Stardew Valley", "Pasta de dente", "Minecraft");

echo '<h1>Tarefas</h1>';
echo '<div id="teste">' . implode("", $outraDivisoria) . '</div><br>';

array_unshift($tarefas, "<img src='img/divisoria.png' id='divisoria'> ");
array_push($tarefas, "Estudar <br> <img src='img/divisoria.png' id='divisoria'>");
print_r(implode(" <br> <img src='img/alfinete.png' id='imagem'> " , $tarefas));

array_shift($tarefas);
echo '<br>Você tem ' . count($tarefas) . ' tarefa(s). <br><br>';

echo '<br><h1>Preciso Comprar</h1>';
function adicionarCaixaSelecionar($caixa) {
    return $caixa . " <img src='img/caixa.png' id='imagem'> <br>";
}
$comCaixa = array_map('adicionarCaixaSelecionar', $compraSemana);
print_r(implode("", $comCaixa));

?>
</body>
 
</html>