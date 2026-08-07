<?php
<?php
function calcularIMC($peso, $altura) {
    if ($altura <= 0) return "Altura inválida.";
    $imc = $peso / ($altura * $altura);
    return round($imc, 2);
}

function validarEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
}

function gerarSenhaAleatoria($tamanho = 8) {
    $caracteres = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%';
    $senha = '';
    $limite = strlen($caracteres) - 1;
    for ($i = 0; $i < $tamanho; $i++) {
        $senha .= $caracteres[rand(0, $limite)];
    }
    return $senha;
}

function contarVogais($texto) {
    $textoMinusculo = mb_strtolower($texto, 'UTF-8');
    preg_match_all('/[aeiouáéíóúâêîôûãõ]/u', $textoMinusculo, $matches);
    return count($matches[0]);
}

function inverterTexto($texto) {
    preg_match_all('/./us', $texto, $ar);
    return implode('', array_reverse($ar[0]));
}

function calcularIdade($dataNascimento) {
    $nascimento = new DateTime($dataNascimento);
    $hoje = new DateTime();
    $diferenca = $hoje->diff($nascimento);
    return $diferenca->y;
}

function converterMoeda($valor, $taxaCamber) {
    return $valor * $taxaCamber;
}

function formatarTelefone($numero) {
    $limpo = preg_replace('/[^0-9]/', '', $numero);
    if (strlen($limpo) == 11) {
        return "(" . substr($limpo, 0, 2) . ") " . substr($limpo, 2, 5) . "-" . substr($limpo, 7);
    }
    return $numero; // Retorna original se não tiver o tamanho padrão celular
}

function gerarSaudacao($hora) {
    if ($hora >= 5 && $hora < 12) return "Bom dia!";
    if ($hora >= 12 && $hora < 18) return "Boa tarde!";
    return "Boa noite!";
}

function validarSenhaForte($senha) {
    $tamanho = strlen($senha) >= 8;
    $maiuscula = preg_match('/[A-Z]/', $senha);
    $numero = preg_match('/[0-9]/', $senha);
    $especial = preg_match('/[!@#$%^&*(),.?":{}|<>]/', $senha);
    
    return $tamanho && $maiuscula && $numero && $especial;
}
