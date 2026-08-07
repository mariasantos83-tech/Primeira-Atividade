<?php
function estatisticasNumericas(numeros) {
    if (!numeros || numeros.length === 0) {
        return "O vetor de números está vazio.";
    }
    const soma = numeros.reduce((acc, curr) => acc + curr, 0);
    const media = soma / numeros.length;
    const maiorValor = Math.max(...numeros);
    const menorValor = Math.min(...numeros);

    const ordenados = [...numeros].sort((a, b) => a - b);
    const meio = Math.floor(ordenados.length / 2);
    let mediana;

    if (ordenados.length % 2 === 0) {
        mediana = (ordenados[meio - 1] + ordenados[meio]) / 2;
    } else {
        mediana = ordenados[meio];
    }
    let pares = 0;
    let impares = 0;
    numeros.forEach(num => {
        if (num % 2 === 0) {
            pares++;
        } else {
            impares++;
        }
    });

    return {
        soma: soma,
        media: Number(media.toFixed(2)),
        maiorValor: maiorValor,
        menorValor: menorValor,
        mediana: mediana,
        quantidadePares: pares,
        quantidadeImpares: impares
    };
}

const dados =;
console.log(estatisticasNumericas(dados));
{
  soma: 55,
  media: 9.17,
  maiorValor: 18,
  menorValor: 2,
  mediana: 8.5, (Vetor ordenado: [2, 5, 7, 10, 13, 18] -> Média de 7 e 10)
  quantidadePares: 3,
  quantidadeImpares: 3
}

