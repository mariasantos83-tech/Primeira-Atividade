<?php
function formatarTexto(texto) {
    if (!texto) return "Texto inválido.";

    const titulo = texto
        .toLowerCase()
        .split(' ')
        .map(palavra => palavra.charAt(0).toUpperCase() + palavra.slice(1))
        .join(' ');

    return {
        maiusculas: texto.toUpperCase(),
        minusculas: texto.toLowerCase(),
        primeiraMaiuscula: titulo,
        totalCaracteres: texto.length
    };
}

console.log(formatarTexto("olá mundo, padronizando relatórios"));
{
  maiusculas: 'OLÁ MUNDO, PADRONIZANDO RELATÓRIOS',
  minusculas: 'olá mundo, padronizando relatórios',
  primeiraMaiuscula: 'Olá Mundo, Padronizando Relatórios',
  totalCaracteres: 34
}
*/
