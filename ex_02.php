<?php
presa de tecnologia está desenvρίνηοδο με 31stone, pare tratamento de textos.
// Crie una função chanade inverterlestol) que receba uma string e returne o texτα
//completamente invertido.
ALE DISRO, exiba quantidade de caracteres, existentes na string original.
function inverterTexto($texto)[
// stzrev() inverte byte a byte, o que quebra acentos caracteres especials
UTF-l, letras coma letras como ç'ta ocupan mois de 1 byte).
// Por isso Reparamos o texto en un array de caracteres de CIM
// preg split() usando a flag (Unicode/UTF-8).
$caracteres preg split('//u', $texto, -1,
PREG SPLIT_NO_EMPTY);
//artey reverse() inverto a ordem dos itens do array de
caracteres
$caracteresInvertidos = array_reverse($caracteres);
implodel) junta o array invertido de volta em uma única
string
$textoInvertido implode('', $caracteresInvertidos);
// strlent) conta corretamente a quantidade de caracteres mes no coll
aceptos sinbolus especiais (diferente de strlen(), que costa bytes)
$quantidadeCaracteres = mb_strlen($texto);
Camo a função no pode ter un return", devalvemos o
dors valores
juntos dentre de an array associative
return [
"invertido" $texto Invertido,
"quantidade" $quantidadeCaracteres
}
$texto_usuario "Programação em PHP1 @2024 #ça";
echo "Texto original: Stexto_usuario <br>";
Sresultado inverterTexto($texto_usuario);
echo "Texto invertido: $resultado["invertido"] "<br>";
echo "Quantidade de caracteres: . $resultado["quantidade"].
<br>";
