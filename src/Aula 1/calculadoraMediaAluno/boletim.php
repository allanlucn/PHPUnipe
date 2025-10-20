<?php
 $nomeAluno = $_GET['nomeAluno'];
 $nota1 = $_GET['nota1'];
 $nota2 = $_GET['nota2'];

$media = ($nota1 + $nota2) / 2;

echo("Nota 1: " . $nota1 . "<br>");
echo("Nota 2: " . $nota2 . "<br>");
printf("O aluno %s teve a média: %.2f.<br>",$nomeAluno, $media);




?>