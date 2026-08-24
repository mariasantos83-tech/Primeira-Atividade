<?php
function calcularMedia(notas) {
    if (!notas || notas.length === 0) {
        return "Nenhuma nota informada.";
    }
    const maiorNota = Math.max(...notas);
    const menorNota = Math.min(...notas);

    const soma = notas.reduce((acc, nota) => acc + nota, 0);
    const media = soma / notas.length;

    let situacaoFinal;
    if (media >= 7.0) {
        situacaoFinal = "Aprovado";
    } else if (media >= 5.0) {
        situacaoFinal = "Recuperação";
    } else {
        situacaoFinal = "Reprovado";
    }

    return {
        maiorNota: maiorNota.toFixed(1),
        menorNota: menorNota.toFixed(1),
        media: media.toFixed(2),
        situacaoFinal: situacaoFinal
    };
}

console.log(calcularMedia([8.5, 6.0, 9.0, 7.5])); 
console.log(calcularMedia([5.0, 6.5, 4.5, 6.0])); 
console.log(calcularMedia([4.0, 3.5, 5.0, 2.0])); 