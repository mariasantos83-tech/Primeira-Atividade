<?php
const CARACTERES = {
    maiusculas: "ABCDEFGHIJKLMNOPQRSTUVWXYZ",
    minusculas: "abcdefghijklmnopqrstuvwxyz",
    numeros: "0123456789",
    especiais: "!@#$%^&*()_+-=[]{}|;:,.<>?"
};
function obterCaractereAleatorio(texto) {
    const indice = Math.floor(Math.random() * texto.length);
    return texto.charAt(indice);
}

function gerarBaseObrigatoria() {
    return [
        obterCaractereAleatorio(CARACTERES.maiusculas),
        obterCaractereAleatorio(CARACTERES.minusculas),
        obterCaractereAleatorio(CARACTERES.numeros),
        obterCaractereAleatorio(CARACTERES.especiais)
    ];
}

function embaralharArray(array) {
    for (let i = array.length - 1; i > 0; i--) {
        const j = Math.floor(Math.random() * (i + 1));
        [array[i], array[j]] = [array[j], array[i]];
    }
    return array.join('');
}
function gerarSenha(tamanho) {
    if (tamanho < 4) {
        throw new Error("O tamanho mínimo da senha deve ser 4 caracteres.");
    }

    const todosOsCaracteres = Object.values(CARACTERES).join('');
    
    let senhaArray = gerarBaseObrigatoria();
    
    while (senhaArray.length < tamanho) {
        senhaArray.push(obterCaractereAleatorio(todosOsCaracteres));
    }

    return embaralharArray(senhaArray);
}
