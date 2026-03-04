<?php
echo "1 - Olá\n2 - Sair\n";
$opt = trim(fgets(STDIN));

switch ($opt) {
    case '1':
        echo "Olá!\n";
        break;
    case '2':
        echo "Tchau!\n";
        break;
    default:
        echo "Opção inválida!\n";
        break;
}   ?>