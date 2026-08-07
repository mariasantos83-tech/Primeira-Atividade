<?php
function ordenarNomes(listaNomes) {
        return listaNomes
        .split(',')
        .map(nome => nome.trim())
        .sort((a, b) => a.localeCompare(b));
}
const entrada = " Mariana, Carlos , ana, Bruno, Vitória ";
console.log(ordenarNomes(entrada)); 

