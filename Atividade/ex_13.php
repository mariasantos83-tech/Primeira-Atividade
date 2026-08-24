<?php
function cifraDeCesar(texto, deslocamento) {
    return texto
        .split('')
        .map(char => {
            const codigo = char.charCodeAt(0);

            if (codigo >= 65 && codigo <= 90) {
                return String.fromCharCode(((codigo - 65 + deslocamento) % 26 + 26) % 26 + 65);
            }
            else if (codigo >= 97 && codigo <= 122) {
                return String.fromCharCode(((codigo - 97 + deslocamento) % 26 + 26) % 26 + 97);
            }
            
            return char;
        })
        .join('');
}

function criptografarMensagem(texto) {
    return cifraDeCesar(texto, 3);
}

function descriptografarMensagem(textoCriptografado) {
    return cifraDeCesar(textoCriptografado, -3);
}

const mensagemOriginal = "Seguranca em Primeiro Lugar!";

const cifrada = criptografarMensagem(mensagemOriginal);
console.log("Criptografada:", cifrada); 

const decifrada = descriptografarMensagem(cifrada);
console.log("Descriptografada:", decifrada); 
