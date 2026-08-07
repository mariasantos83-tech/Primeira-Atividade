<?php
function calcularDesconto(valorTotal) {
    let percentualDesconto = 0;

    if (valorTotal > 1000) {
        percentualDesconto = 0.30; 
    } else if (valorTotal > 500) {
        percentualDesconto = 0.20; 
    } else if (valorTotal > 100) {
        percentualDesconto = 0.10; 
    } else {
        percentualDesconto = 0.00;
    }

    const valorDesconto = valorTotal * percentualDesconto;
    const valorFinal = valorTotal - valorDesconto;

    return {
        valorOriginal: `R$ ${valorTotal.toFixed(2)}`,
        descontoAplicado: `${percentualDesconto * 100}% (R$ ${valorDesconto.toFixed(2)})`,
        valorFinal: `R$ ${valorFinal.toFixed(2)}`
    };
}

// --- Exemplos de Teste ---
console.log(calcularDesconto(80.00));  
console.log(calcularDesconto(250.00));  
console.log(calcularDesconto(750.00));  
console.log(calcularDesconto(1200.00)); 

