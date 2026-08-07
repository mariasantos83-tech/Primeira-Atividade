<?php
function contarMaiusculas(senha) {
    return (senha.match(/[A-Z]/g) || []).length;
}

function contarMinusculas(senha) {
    return (senha.match(/[a-z]/g) || []).length;
}

function contarNumeros(senha) {
    return (senha.match(/[0-9]/g) || []).length;
}

function contarEspeciais(senha) {
    return (senha.match(/[^A-Za-z0-9]/g) || []).length;
}

function classificarSeguranca(maiusculas, minusculas, numeros, especiais, tamanho) {
    let criteriosAtendidos = 0;

    if (tamanho >= 8) criteriosAtendidos++;
    if (maiusculas > 0) criteriosAtendidos++;
    if (minusculas > 0) criteriosAtendidos++;
    if (numeros > 0) criteriosAtendidos++;
    if (especiais > 0) criteriosAtendidos++;

    if (criteriosAtendidos <= 2) return "Fraca";
    if (criteriosAtendidos === 3) return "Média";
    if (criteriosAtendidos === 4) return "Forte";
    return "Muito Forte"; // 5 critérios atendidos
}

function analisarSenha(senha) {
    const maiusculas = contarMaiusculas(senha);
    const minusculas = contarMinusculas(senha);
    const numeros = contarNumeros(senha);
    const especiais = contarEspeciais(senha);
    const tamanho = senha.length;

    const nivel = classificarSeguranca(maiusculas, minusculas, numeros, especiais, tamanho);

    return [maiusculas, minusculas, numeros, especiais, tamanho, nivel];
}
