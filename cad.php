
<?php

function contarCaracteres($cad)
{
    return strlen($cad);
}

function convertirMayusculas($cad)
{
    return strtoupper($cad);
}

function convertirMinusculas($cad)
{
    return strtolower($cad);
}

function invertirCadena($cad)
{
    return strrev($cad);
}

function esPalindromo($cad)
{
    $cad = strtolower($cad);
    $cad = str_replace(" ", "", $cad);

    if ($cad == strrev($cad))
        return "Es palíndromo";
    else
        return "No es palíndromo";
}

function contarVocales($cad)
{
    $voc = "aeiouAEIOU";
    $cont = 0;

    for ($i = 0; $i < strlen($cad); $i++)
    {
        if (strpos($voc, $cad[$i]) !== false)
            $cont++;
    }

    return $cont;
}

?>
