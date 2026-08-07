<?php
function converterTemperatura(valor, origem, destino) {
    const daEscala = origem.toUpperCase();
    const paraEscala = destino.toUpperCase();
    
    if (daEscala === paraEscala) {
        return valor;
    }

    let celsius;

    switch (daEscala) {
        case 'CELSIUS':
        case 'C':
            celsius = valor;
            break;
        case 'FAHRENHEIT':
        case 'F':
            celsius = (valor - 32) * 5 / 9;
            break;
        case 'KELVIN':
        case 'K':
            celsius = valor - 273.15;
            break;
        default:
            return "Escala de origem inválida.";
    }

    switch (paraEscala) {
        case 'CELSIUS':
        case 'C':
            return celsius;
        case 'FAHRENHEIT':
        case 'F':
            return (celsius * 9 / 5) + 32;
        case 'KELVIN':
        case 'K':
            return celsius + 273.15;
        default:
            return "Escala de destino inválida.";
    }
}
console.log(converterTemperatura(0, "C", "F"));    
console.log(converterTemperatura(100, "Celsius", "Kelvin"));
console.log(converterTemperatura(32, "F", "C"));  
console.log(converterTemperatura(300, "K", "C"));  
