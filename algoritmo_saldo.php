<?php

/*
  OscarGonzalez1987/python3_2020
  is licensed under the
  GNU General Public License v3.0
  --------------------------------------
  Permissions of this strong copyleft
  license are conditioned on making
  available complete source code of
  licensed works && modifications,
  which include larger works using a
  licensed work, under the same license.

  Copyright && license notices must
  be preserved.

  Contributors provide an express
  grant of patent rights.
  --------------------------------------





------------------------------------------- 
$array = ["foo" => "bar", "bar" => "foo"];
echo $array["foo"];
-------------------------------------------
$arrayee = ["foyo", "bar", "bar", "foo"];
echo $arrayee[0];
-------------------------------------------



function caso_especial_mil() {
    $texto=["decenas_mil" => "", "unidades_mil" => "", "mil" => "mil", "centenas" => "", "decenas" => "", "unidades" => ""];
    return $texto;
}
$arreglo = caso_especial_mil();


function caso_especial_cero() {
    $texto=["decenas_mil" => "", "unidades_mil" => "", "mil" => "", "centenas" => "", "decenas" => "", "unidades" => "cero"];
    return $texto;
}

function caso_especial_cero() {
    $texto['decenas_mil'] = "";
    $texto['unidades_mil'] = "";
    $texto['mil'] = "";
    $texto['centenas'] = "";
    $texto['decenas'] = "";
    $texto['unidades'] = "cero";
    return $texto;
}
 */

#///////////////////////////////////////////////////////////////////////////////


function algoritmo_saldo($saldo) {
if ($saldo == 0) {
    $texto = caso_especial_cero();
} else {
    // $texto = ["decenas_mil", "unidades_mil", "mil", "centenas", "decenas", "unidades"];
    if ($saldo == 1000) {
        $texto = caso_especial_mil();
    } elseif ($saldo > 999) {
        $texto = blq_Sup_999($saldo);
    } else {
        $texto = blq_Inf_999($saldo);
    }
    // echo "<br>" . $texto['decenas_mil'] . $texto['unidades_mil'] . $texto['mil'] . $texto['centenas'] . $texto['decenas'] . $texto['unidades'];
    return $texto;
}
return $texto;
}

function caso_especial_mil() {
    $texto=["decenas_mil" => "", "unidades_mil" => "", "mil" => "mil", "centenas" => "", "decenas" => "", "unidades" => ""];
    return $texto;
}

function caso_especial_cero() {
    $texto=["decenas_mil" => "", "unidades_mil" => "", "mil" => "", "centenas" => "", "decenas" => "", "unidades" => "cero"];
    return $texto;
}

function blq_Sup_999($saldo) {
	$texto['mil'] = "mil ";
	$medio_dm = bloque_10000($saldo);
	$texto['decenas_mil'] = $medio_dm['texto'];
	$medio_um = bloque_1000($medio_dm['numero']);
	$texto['unidades_mil'] = $medio_um['texto'];
	$medio_c = bloque_100($medio_um['numero']);
	$texto['centenas'] = $medio_c['texto'];
	$medio_d = bloque_10($medio_c['numero']);
	$texto['decenas'] = $medio_d['texto'];
	$medio_u = bloque_0($medio_d['numero']);
	$texto['unidades'] = $medio_u['texto'];
    return $texto;
}

function blq_Inf_999($saldo) {
    $texto['mil'] = "";
    $medio_dm = bloque_10000($saldo);
    $texto['decenas_mil'] = $medio_dm['texto'];
    $medio_um = bloque_1000($medio_dm['numero']);
    $texto['unidades_mil'] = $medio_um['texto'];
    $medio_c = bloque_100($medio_um['numero']);
    $texto['centena'] = $medio_c['texto'];
    $medio_d = bloque_10($medio_c['numero']);
    $texto['decenas'] = $medio_d['texto'];
    $medio_u = bloque_0($medio_d['numero']);
    $texto['unidades'] = $medio_u['texto'];
    return $texto;
}

function bloque_100000($saldo) {
    if ($saldo >= 100000 && $saldo <= 1999999) {
        $salida = rango_100000($saldo);
    } elseif ($saldo >= 200000 && $saldo <= 299999) {
        $salida = rango_200000($saldo);
    } elseif ($saldo >= 300000 && $saldo <= 399999) {
        $salida = rango_300000($saldo);
    } elseif ($saldo >= 400000 && $saldo <= 499999) {
        $salida = rango_400000($saldo);
    } elseif ($saldo >= 500000 && $saldo <= 599999) {
        $salida = rango_500000($saldo);
    } elseif ($saldo >= 600000 && $saldo <= 699999) {
        $salida = rango_600000($saldo);
    } elseif ($saldo >= 700000 && $saldo <= 799999) {
        $salida = rango_700000($saldo);
    } elseif ($saldo >= 800000 && $saldo <= 899999) {
        $salida = rango_800000($saldo);
    } elseif ($saldo >= 900000 && $saldo <= 999999) {
        $salida = rango_900000($saldo);
    } else { $salida = $saldo;  
    } return $salida;
}

function bloque_10000($saldo) {
    if ($saldo >= 10000 && $saldo <= 19999) {
        $salida = rango_10000($saldo);
    } elseif ($saldo >= 20000 && $saldo <= 29999) {
        $salida = rango_20000($saldo);
    } elseif ($saldo >= 30000 && $saldo <= 39999) {
        $salida = rango_30000($saldo);
    } elseif ($saldo >= 40000 && $saldo <= 49999) {
        $salida = rango_40000($saldo);
    } elseif ($saldo >= 50000 && $saldo <= 59999) {
        $salida = rango_50000($saldo);
    } elseif ($saldo >= 60000 && $saldo <= 69999) {
        $salida = rango_60000($saldo);
    } elseif ($saldo >= 70000 && $saldo <= 79999) {
        $salida = rango_70000($saldo);
    } elseif ($saldo >= 80000 && $saldo <= 89999) {
        $salida = rango_80000($saldo);
    } elseif ($saldo >= 90000 && $saldo <= 99999) {
        $salida = rango_90000($saldo);
    } else { $salida['numero'] = $saldo; $salida['texto'] = "";
    } return $salida;
}

function bloque_1000($saldo) {
    if ($saldo >= 1000 && $saldo <= 1999) {
        $salida = rango_1000($saldo);
    } elseif ($saldo >= 2000 && $saldo <= 2999) {
        $salida = rango_2000($saldo);
    } elseif ($saldo >= 3000 && $saldo <= 3999) {
        $salida = rango_3000($saldo);
    } elseif ($saldo >= 4000 && $saldo <= 4999) {
        $salida = rango_4000($saldo);
    } elseif ($saldo >= 5000 && $saldo <= 5999) {
        $salida = rango_5000($saldo);
    } elseif ($saldo >= 6000 && $saldo <= 6999) {
        $salida = rango_6000($saldo);
    } elseif ($saldo >= 7000 && $saldo <= 7999) {
        $salida = rango_7000($saldo);
    } elseif ($saldo >= 8000 && $saldo <= 8999) {
        $salida = rango_8000($saldo);
    } elseif ($saldo >= 9000 && $saldo <= 9999) {
        $salida = rango_9000($saldo);
    } else { $salida['numero'] = $saldo; $salida['texto'] = "";
    } return $salida;
}

function bloque_100($saldo) {
    if ($saldo >= 100 && $saldo <= 199) {
        $salida = rango_100($saldo);
    } elseif ($saldo >= 200 && $saldo <= 299) {
        $salida = rango_200($saldo);
    } elseif ($saldo >= 300 && $saldo <= 399) {
        $salida = rango_300($saldo);
    } elseif ($saldo >= 400 && $saldo <= 499) {
        $salida = rango_400($saldo);
    } elseif ($saldo >= 500 && $saldo <= 599) {
        $salida = rango_500($saldo);
    } elseif ($saldo >= 600 && $saldo <= 699) {
        $salida = rango_600($saldo);
    } elseif ($saldo >= 700 && $saldo <= 799) {
        $salida = rango_700($saldo);
    } elseif ($saldo >= 800 && $saldo <= 899) {
        $salida = rango_800($saldo);
    } elseif ($saldo >= 900 && $saldo <= 999) {
        $salida = rango_900($saldo);
    } else {
        $salida['numero'] = $saldo;
        $salida['texto'] = "";
    } return $salida;
}




function bloque_10($saldo) {
    if ($saldo >= 10 && $saldo <= 19) {
        rango_especial_10($saldo);
    } elseif ($saldo >= 20 && $saldo <= 29) {
        $salida = rango_especial_20($saldo);
    } elseif ($saldo >= 30 && $saldo <= 39) { $salida = rango_30($saldo);
    } elseif ($saldo >= 40 && $saldo <= 49) { $salida = rango_40($saldo);
    } elseif ($saldo >= 50 && $saldo <= 59) { $salida = rango_50($saldo);
    } elseif ($saldo >= 60 && $saldo <= 69) { $salida = rango_60($saldo);
    } elseif ($saldo >= 70 && $saldo <= 79) { $salida = rango_70($saldo);
    } elseif ($saldo >= 80 && $saldo <= 89) { $salida = rango_80($saldo);
    } elseif ($saldo >= 90 && $saldo <= 99) { $salida = rango_90($saldo);
    } else { $salida['texto'] = ""; $salida['numero'] = $saldo;
    } return $salida;
}

function rango_especial_10($saldo) {
    if ($saldo == 10) { $salida['texto'] = diez(); $salida['numero'] = 0;
    } elseif ($saldo == 11) { $salida['texto'] = once(); $salida['numero'] = 0;
    } elseif ($saldo == 12) { $salida['texto'] = doce(); $salida['numero'] = 0;
    } elseif ($saldo == 13) { $salida['texto'] = trece(); $salida['numero'] = 0;
    } elseif ($saldo == 14) { $salida['texto'] = catorce(); $salida['numero'] = 0;
    } elseif ($saldo == 15) { $salida['texto'] = quince(); $salida['numero'] = 0;
    } elseif ($saldo == 16) { $salida['texto'] = dieciseis(); $salida['numero'] = 0;
    } elseif ($saldo == 17) { $salida['texto'] = diecisiete(); $salida['numero'] = 0;
    } elseif ($saldo == 18) { $salida['texto'] = dieciocho(); $salida['numero'] = 0;
    } elseif ($saldo == 19) { $salida['texto'] = diecinueve(); $salida['numero'] = 0;
    } return $salida;
}

function rango_especial_20($saldo) {
    if ($saldo == 20) { $salida['texto'] = veinte(); $salida['numero'] = 0;
    } elseif ($saldo == 21) { $salida['texto'] = ventiuno(); $salida['numero'] = 0;
    } elseif ($saldo == 22) { $salida['texto'] = ventidos(); $salida['numero'] = 0;
    } elseif ($saldo == 23) { $salida['texto'] = ventitres(); $salida['numero'] = 0;
    } elseif ($saldo == 24) { $salida['texto'] = venticuatro(); $salida['numero'] = 0;
    } elseif ($saldo == 25) { $salida['texto'] = venticinco(); $salida['numero'] = 0;
    } elseif ($saldo == 26) { $salida['texto'] = ventiseis(); $salida['numero'] = 0;
    } elseif ($saldo == 27) { $salida['texto'] = ventisiete(); $salida['numero'] = 0;
    } elseif ($saldo == 28) { $salida['texto'] = ventiocho(); $salida['numero'] = 0;
    } elseif ($saldo == 29) { $salida['texto'] = ventinueve(); $salida['numero'] = 0;
    } return $salida;
}





function bloque_0($saldo) {
    if ($saldo == 1) {
        $salida['texto'] = uno();
    } elseif ($saldo == 2) {
        $salida['texto'] = dos();
    } elseif ($saldo == 3) {
        $salida['texto'] = tres();
    } elseif ($saldo == 4) {
        $salida['texto'] = cuatro();
    } elseif ($saldo == 5) {
        $salida['texto'] = cinco();
    } elseif ($saldo == 6) {
        $salida['texto'] = seis();
    } elseif ($saldo == 7) {
        $salida['texto'] = siete();
    } elseif ($saldo == 8) {
        $salida['texto'] = ocho();
    } elseif ($saldo == 9) {
        $salida['texto'] = nueve();
    } else { $salida['texto'] = ""; $salida['numero'] = 0;
    } return $salida;
}

function rango_10000($saldo) {
    if ($saldo >= 10000 && $saldo <= 10999) {
        $salida['texto'] = diez(); $saldo -= 10000;
    } elseif ($saldo >= 11000 && $saldo <= 11999) {
        $salida['texto'] = once(); $saldo -= 11000;
    } elseif ($saldo >= 12000 && $saldo <= 12999) {
        $salida['texto'] = doce(); $saldo -= 12000;
    } elseif ($saldo >= 13000 && $saldo <= 13999) {
        $salida['texto'] = trece(); $saldo -= 13000;
    } elseif ($saldo >= 14000 && $saldo <= 14999) {
        $salida['texto'] = catorce(); $saldo -= 14000;
    } elseif ($saldo >= 15000 && $saldo <= 15999) {
        $salida['texto'] = quince(); $saldo -= 15000;
    } elseif ($saldo >= 16000 && $saldo <= 16999) {
        $salida['texto'] = dieciseis(); $saldo -= 16000;
    } elseif ($saldo >= 17000 && $saldo <= 17999) {
        $salida['texto'] = diecisiete(); $saldo -= 17000;
    } elseif ($saldo >= 18000 && $saldo <= 18999) {
        $salida['texto'] = dieciocho(); $saldo -= 18000;
    } elseif ($saldo >= 19000 && $saldo <= 19999) {
        $salida['texto'] = diecinueve(); $saldo -= 19000;
    } $salida['numero'] = $saldo; return $salida; }

function rango_20000($saldo) {
    if ($saldo >= 20000 && $saldo <= 20999) {
        $salida['texto'] = veinte(); $saldo -= 20000;
    } elseif ($saldo >= 21000 && $saldo <= 21999) {
        $salida['texto'] = ventiuno(); $saldo -= 21000;
    } elseif ($saldo >= 22000 && $saldo <= 22999) {
        $salida['texto'] = ventidos(); $saldo -= 22000;
    } elseif ($saldo >= 23000 && $saldo <= 23999) {
        $salida['texto'] = ventitres(); $saldo -= 23000;
    } elseif ($saldo >= 24000 && $saldo <= 24999) {
        $salida['texto'] = venticuatro(); $saldo -= 24000;
    } elseif ($saldo >= 25000 && $saldo <= 25999) {
        $salida['texto'] = venticinco(); $saldo -= 25000;
    } elseif ($saldo >= 26000 && $saldo <= 26999) {
        $salida['texto'] = ventiseis(); $saldo -= 26000;
    } elseif ($saldo >= 27000 && $saldo <= 27999) {
        $salida['texto'] = ventisiete(); $saldo -= 27000;
    } elseif ($saldo >= 28000 && $saldo <= 28999) {
        $salida['texto'] = ventiocho(); $saldo -= 28000;
    } elseif ($saldo >= 29000 && $saldo <= 29999) {
        $salida['texto'] = ventinueve(); $saldo -= 29000;
    } $salida['numero'] = $saldo; return $salida; }

function rango_30000($saldo) {
    if ($saldo >= 30000 && $saldo <= 30999) {
        $bloque = bloque_10(30);
        $salida['texto'] = $bloque['texto'];
        $saldo -= 30000;
        $salida['numero'] = $saldo;
    } elseif ($saldo >= 31000 && $saldo <= 39999) {
        $bloque = bloque_10(31);
        $salida['texto'] = $bloque['texto'];
        $saldo -= 30000;
        $salida['numero'] = $saldo;
    }
    return $salida;
}

function rango_40000($saldo) {
    if ($saldo >= 40000 && $saldo <= 40999) {
        $bloque = bloque_10(40);
        $salida['texto'] = $bloque['texto'];
        $saldo -= 40000;
        $salida['numero'] = $saldo;
    } elseif ($saldo >= 41000 && $saldo <= 49999) {
        $bloque = bloque_10(41);
        $salida['texto'] = $bloque['texto'];
        $saldo -= 40000;
        $salida['numero'] = $saldo;
    }
    return $salida;
}

function rango_50000($saldo) {
    if ($saldo >= 50000 && $saldo <= 50999) {
        $bloque = bloque_10(50);
        $salida['texto'] = $bloque['texto'];
        $saldo -= 50000;
        $salida['numero'] = $saldo;
    } elseif ($saldo >= 51000 && $saldo <= 59999) {
        $bloque = bloque_10(51);
        $salida['texto'] = $bloque['texto'];
        $saldo -= 50000;
        $salida['numero'] = $saldo;
    }
    return $salida;
}

function rango_60000($saldo) {
    if ($saldo >= 60000 && $saldo <= 60999) {
        $bloque = bloque_10(60);
        $salida['texto'] = $bloque['texto'];
        $saldo -= 60000;
        $salida['numero'] = $saldo;
    } elseif ($saldo >= 61000 && $saldo <= 69999) {
        $bloque = bloque_10(61);
        $salida['texto'] = $bloque['texto'];
        $saldo -= 60000;
        $salida['numero'] = $saldo;
    }
    return $salida;
}

function rango_70000($saldo) {
    if ($saldo >= 70000 && $saldo <= 70999) {
        $bloque = bloque_10(70);
        $salida['texto'] = $bloque['texto'];
        $saldo -= 70000;
        $salida['numero'] = $saldo;
    } elseif ($saldo >= 71000 && $saldo <= 79999) {
        $bloque = bloque_10(71);
        $salida['texto'] = $bloque['texto'];
        $saldo -= 70000;
        $salida['numero'] = $saldo;
    }
    return $salida;
}

function rango_80000($saldo) {
    if ($saldo >= 80000 && $saldo <= 80999) {
        $bloque = bloque_10(80);
        $salida['texto'] = $bloque['texto'];
        $saldo -= 80000;
        $salida['numero'] = $saldo;
    } elseif ($saldo >= 81000 && $saldo <= 89999) {
        $bloque = bloque_10(81);
        $salida['texto'] = $bloque['texto'];
        $saldo -= 80000;
        $salida['numero'] = $saldo;
    }
    return $salida;
}

function rango_90000($saldo) {
    if ($saldo >= 90000 && $saldo <= 90999) {
        $bloque = bloque_10(90);
        $salida['texto'] = $bloque['texto'];
        $saldo -= 90000;
        $salida['numero'] = $saldo;
    } elseif ($saldo >= 91000 && $saldo <= 99999) {
        $bloque = bloque_10(91);
        $salida['texto'] = $bloque['texto'];
        $saldo -= 90000;
        $salida['numero'] = $saldo;
    }
    return $salida;
}


function rango_1000($saldo) {
    if ($saldo == 1000) {
        $salida['texto'] = uno();
        $salida['numero'] = 0;
    } elseif ($saldo > 1000) {
        $salida['texto'] = uno();
        $saldo -= 1000;
        $salida['numero'] = $saldo;
    }
    return $salida;
}

function rango_2000($saldo) {
    if ($saldo >= 2000) {
        $salida['texto'] = dos();
        $saldo -= 2000;
        $salida['numero'] = $saldo;
    }
    return $salida;
}

function rango_3000($saldo) {
    if ($saldo >= 3000) {
        $salida['texto'] = tres();
        $saldo -= 3000;
        $salida['numero'] = $saldo;
    }
    return $salida;
}

function rango_4000($saldo) {
    if ($saldo >= 4000) {
        $salida['texto'] = cuatro();
        $saldo -= 4000;
        $salida['numero'] = $saldo;
    }
    return $salida;
}

function rango_5000($saldo) {
    if ($saldo >= 5000) {
        $salida['texto'] = cinco();
        $saldo -= 5000;
        $salida['numero'] = $saldo;
    }
    return $salida;
}

function rango_6000($saldo) {
    if ($saldo >= 6000) {
        $salida['texto'] = seis();
        $saldo -= 6000;
        $salida['numero'] = $saldo;
    }
    return $salida;
}

function rango_7000($saldo) {
    if ($saldo >= 7000) {
        $salida['texto'] = siete();
        $saldo -= 7000;
        $salida['numero'] = $saldo;
    }
    return $salida;
}

function rango_8000($saldo) {
    if ($saldo >= 8000) {
        $salida['texto'] = ocho();
        $saldo -= 8000;
        $salida['numero'] = $saldo;
    }
    return $salida;
}

function rango_9000($saldo) {
    if ($saldo >= 9000) {
        $salida['texto'] = nueve();
        $saldo -= 9000;
        $salida['numero'] = $saldo;
    }
    return $salida;
}


function rango_100($saldo) {
    if ($saldo == 100) {
        $salida['texto'] = cien();
        $salida['numero'] = 0;
    } elseif ($saldo > 100) {
        $salida['texto'] = ciento();
        $saldo -= 100;
        $salida['numero'] = $saldo;
    }
    return $salida;
}

function rango_200($saldo) {
    if ($saldo >= 200) {
        $salida['texto'] = doscientos();
        $saldo -= 200;
        $salida['numero'] = $saldo;
        return $salida;
    }
}

function rango_300($saldo) {
    if ($saldo >= 300) {
        $salida['texto'] = trescientos();
        $saldo -= 300;
        $salida['numero'] = $saldo;
        return $salida;
    }
}

function rango_400($saldo) {
    if ($saldo >= 400) {
        $salida['texto'] = cuatrocientos();
        $saldo -= 400;
        $salida['numero'] = $saldo - 400;
        return $salida;
    }
}

function rango_500($saldo) {
    if ($saldo >= 500) {
        $salida['texto'] = quinientos();
        $salida['numero'] = $saldo - 500;
        return $salida;
    }
}

function rango_600($saldo) {
    if ($saldo >= 600) {
        $salida['texto'] = seiscientos();
        $salida['numero'] = $saldo - 600;
        return $salida;
    }
}

function rango_700($saldo) {
    if ($saldo >= 700) {
        $salida['texto'] = setecientos();
        $salida['numero'] = $saldo - 700;
        return $salida;
    }
}

function rango_800($saldo) {
    if ($saldo >= 800) {
        $salida['texto'] = ochocientos();
        $salida['numero'] = $saldo - 800;
        return $salida;
    }
}

function rango_900($saldo) {
    if ($saldo >= 900) {
        $salida['texto'] = novecientos();
        $salida['numero'] = $saldo - 900;
        return $salida;
    }
}


function rango_30($saldo) {
    if ($saldo == 30) {
        $salida['texto'] = treinta();
        $salida['numero'] = 0;
    } elseif ($saldo > 30) {
        $salida['texto'] = treinta_y();
        $salida['numero'] = $saldo - 30;
    }
    return $salida;
}

function rango_40($saldo) {
    if ($saldo == 40) {
        $salida['texto'] = cuarenta();
        $salida['numero'] = 0;
    } elseif ($saldo > 40) {
        $salida['texto'] = cuarenta_y();
        $salida['numero'] = $saldo - 40;
    }
    return $salida;
}

function rango_50($saldo) {
    if ($saldo == 50) {
        $salida['texto'] = cincuenta();
        $salida['numero'] = 0;
    } elseif ($saldo > 50) {
        $salida['texto'] = cincuenta_y();
        $salida['numero'] = $saldo - 50;
    }
    return $salida;
}

function rango_60($saldo) {
    if ($saldo == 60) {
        $salida['texto'] = sesenta();
        $salida['numero'] = 0;
    } elseif ($saldo > 60) {
        $salida['texto'] = sesenta_y();
        $salida['numero'] = $saldo - 60;
    }
    return $salida;
}

function rango_70($saldo) {
    if ($saldo == 70) {
        $salida['texto'] = setenta();
        $salida['numero'] = 0;
    } elseif ($saldo > 70) {
        $salida['texto'] = setenta_y();
        $salida['numero'] = $saldo - 70;
    }
    return $salida;
}

function rango_80($saldo) {
    if ($saldo == 80) {
        $salida['texto'] = ochenta();
        $salida['numero'] = 0;
    } elseif ($saldo > 80) {
        $salida['texto'] = ochenta_y();
        $salida['numero'] = $saldo - 80;
    }
    return $salida;
}

function rango_90($saldo) {
    if ($saldo == 90) {
        $salida['texto'] = noventa();
        $salida['numero'] = 0;
    } elseif ($saldo > 90) {
        $salida['texto'] = noventa_y();
        $salida['numero'] = $saldo - 90;
    }
    return $salida;
}


function mil() {
    $texto = "mil ";
    return $texto;
}

function millon() {
    $texto = "millon ";
    return $texto;
}

function cien() {
    $texto = "cien ";
    return $texto;
}

function doscientos() {
    $texto = "doscientos ";
    return $texto;
}

function trescientos() {
    $texto = "trescientos ";
    return $texto;
}

function cuatrocientos() {
    $texto = "cuatrocientos ";
    return $texto;
}

function quinientos() {
    $texto = "quinientos ";
    return $texto;
}

function seiscientos() {
    $texto = "seiscientos ";
    return $texto;
}

function setecientos() {
    $texto = "setecientos ";
    return $texto;
}

function ochocientos() {
    $texto = "ochocientos ";
    return $texto;
}

function novecientos() {
    $texto = "novecientos ";
    return $texto;
}

function ciento() {
    $texto = "ciento ";
    return $texto;
}

function diez() {
    $texto = "diez ";
    return $texto;
}

function once() {
    $texto = "once ";
    return $texto;
}

function doce() {
    $texto = "doce ";
    return $texto;
}

function trece() {
    $texto = "trece ";
    return $texto;
}

function catorce() {
    $texto = "catorce ";
    return $texto;
}

function quince() {
    $texto = "quince ";
    return $texto;
}

function dieciseis() {
    $texto = "dieciseis ";
    return $texto;
}

function diecisiete() {
    $texto = "diecisiete ";
    return $texto;
}

function dieciocho() {
    $texto = "dieciocho ";
    return $texto;
}

function diecinueve() {
    $texto = "diecinueve ";
    return $texto;
}

function veinte() {
    $texto = "veinte ";
    return $texto;
}

function ventiuno() {
    $texto = "ventiun ";
    return $texto;
}

function ventidos() {
    $texto = "ventidos ";
    return $texto;
}

function ventitres() {
    $texto = "ventitres ";
    return $texto;
}

function venticuatro() {
    $texto = "venticuatro ";
    return $texto;
}

function venticinco() {
    $texto = "venticinco ";
    return $texto;
}

function ventiseis() {
    $texto = "ventiseis ";
    return $texto;
}

function ventisiete() {
    $texto = "ventisiete ";
    return $texto;
}

function ventiocho() {
    $texto = "ventiocho ";
    return $texto;
}

function ventinueve() {
    $texto = "ventinueve ";
    return $texto;
}

function treinta() {
    $texto = "treinta ";
    return $texto;
}

function treinta_y() {
    $texto = "treinta y ";
    return $texto;
}

function cuarenta() {
    $texto = "cuarenta ";
    return $texto;
}

function cuarenta_y() {
    $texto = "cuarenta y ";
    return $texto;
}

function cincuenta() {
    $texto = "cincuenta ";
    return $texto;
}

function cincuenta_y() {
    $texto = "cincuenta y ";
    return $texto;
}

function sesenta() {
    $texto = "sesenta ";
    return $texto;
}

function sesenta_y() {
    $texto = "sesenta y ";
    return $texto;
}

function setenta() {
    $texto = "setenta ";
    return $texto;
}

function setenta_y() {
    $texto = "setenta y ";
    return $texto;
}

function ochenta() {
    $texto = "ochenta ";
    return $texto;
}

function ochenta_y() {
    $texto = "ochenta y ";
    return $texto;
}

function noventa() {
    $texto = "noventa ";
    return $texto;
}

function noventa_y() {
    $texto = "noventa y ";
    return $texto;
}

function cero() {
    $texto = "cero ";
    return $texto;
}

function uno() {
    $texto = "un ";
    return $texto;
}

function dos() {
    $texto = "dos ";
    return $texto;
}

function tres() {
    $texto = "tres ";
    return $texto;
}

function cuatro() {
    $texto = "cuatro ";
    return $texto;
}

function cinco() {
    $texto = "cinco ";
    return $texto;
}

function seis() {
    $texto = "seis ";
    return $texto;
}

function siete() {
    $texto = "siete ";
    return $texto;
}

function ocho() {
    $texto = "ocho ";
    return $texto;
}

function nueve() {
    $texto = "nueve ";
    return $texto;
}
/*
$saldo = 85354;
algoritmo_saldo($saldo);
 */
?>