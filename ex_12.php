<?php
function analisarProdutos(produtos, termoPesquisa = "") {
    if (!produtos || produtos.length === 0) {
        return "Nenhum produto cadastrado.";
    }
    let maisCaro = produtos[0];
    let maisBarato = produtos[0];
    let somaPrecos = 0;
    for (let i = 0; i < produtos.length; i++) {
        const prod = produtos[i];
        somaPrecos += prod.preco;

        if (prod.preco > maisCaro.preco) maisCaro = prod;
        if (prod.preco < maisBarato.preco) maisBarato = prod;
    }

    const media = somaPrecos / produtos.length;

    const resultadoPesquisa = produtos.filter(prod => 
        prod.nome.toLowerCase().includes(termoPesquisa.toLowerCase())
    );

    return {
        produtoMaisCaro: `${maisCaro.nome} (R$ ${maisCaro.preco.toFixed(2)})`,
        produtoMaisBarato: `${maisBarato.nome} (R$ ${maisBarato.preco.toFixed(2)})`,
        mediaPrecos: `R$ ${media.toFixed(2)}`,
        resultadoBusca: resultadoPesquisa.length > 0 ? resultadoPesquisa : "Nenhum produto encontrado na busca."
    };
}

const listaSupermercado = [
    { nome: "Arroz 5kg", preco: 24.90 },
    { nome: "Feijão 1kg", preco: 8.50 },
    { nome: "Azeite de Oliva", preco: 39.90 },
    { nome: "Café Torrado", preco: 14.20 }
];

console.log(analisarProdutos(listaSupermercado, "café"));
{
  produtoMaisCaro: 'Azeite de Oliva (R$ 39.90)',
  produtoMaisBarato: 'Feijão 1kg (R$ 8.50)',
  mediaPrecos: 'R$ 21.88',
  resultadoBusca: [ { nome: 'Café Torrado', preco: 14.2 } ]
}

