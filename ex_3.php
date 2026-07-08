<?php
function mascararCpf(string $cpf): string {
    $quatroUltimos = substr($cpf, -4);
    $tamanhoMascarar = strlen($cpf) - 4;
    
    return str_repeat('*', $tamanhoMascarar) . $quatroUltimos;
}