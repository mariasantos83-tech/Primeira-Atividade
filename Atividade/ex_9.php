<?php
function analisarNumero(num) {
    const parOuImpar = num % 2 === 0 ? "Par" : "Ímpar";
    let ePrimo = num > 1;
    for (let i = 2; i <= Math.sqrt(num); i++) {
        if (num % i === 0) {
            ePrimo = false;
            break;KT
        }
    }

    let somaDivisores = 0;
    for (let i = 1; i < num; i++) {
        if (num % i === 0) {
            somaDivisores += i;
        }
    }
    const ePerfeito = num > 0 && somaDivisores === num;

    return {
        numero: num,
        classificacao: parOuImpar,
        ehPrimo: ePrimo ? "Sim" : "Não",
        ehPerfeito: ePerfeito ? "Sim" : "Não"
    };
}

console.log(analisarNumero(6));  
console.log(analisarNumero(7));
console.log(analisarNumero(28));
