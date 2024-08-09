<?php
$nome = "velho";
$sobrenome = "velho";
$idade = 20;

if ($nome == $sobrenome) {
    echo "Vedadeiro";
} else {
    echo "falso";
}

for ($i = 0; $i <= 10; $i++) {
    echo $i;
    echo '<br>';
}

$i = 0;
while ($i < 10) {
    $i++;
    echo $i;
    echo '<br>';
}


printNumero(30);

function printNumero($n)
{
    echo $n;
}
