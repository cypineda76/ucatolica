<?php
class FuncionesDAO{
  var $conn;

  function FuncionesDAO(){
  }

  function suma($a, $b){
    return ($a+$b);
  }

  function resta($a, $b){
    return ($a-$b);
  }

  function multiplicacion($a, $b){
    return ($a*$b);
  }

  function trapecio($h, $actual, $siguiente){
    return (($h/2)*($actual+$siguiente));
  }

  function multiplo($numero, $base){
    $modulo = ($numero % $base);
    if($modulo == 0){
      $response = 1;
    }else{
      $response = 0;
    }
    return $response;
  }

  function simpson($h, $num, $num1, $num2){
    return (($h/3)*($num+4*$num1+$num2));
  }
  
  function boole($h, $num, $num1, $num2, $num3, $num4){
    return (2*$h/45*(7*$num+32*$num1+12*$num2+32*$num3+7*$num4));
  }

  function Potencia($base, $exponente){
  	return pow($base, $exponente);
  }

  function Exponencial($numero){
  	return exp($numero);
  }

  function Seno($numero){
  	return sin($numero);
  }

  function Coseno($numero){
  	return cos($numero);
  }

  function ValorAbsoluto($numero){
  	return abs($numero);
  }

  function valormaximo($array){
    return max($array);
  }

  function valorminimo($array){
    return min($array);
  }

  function producto($a, $b){
    $vala = $a+0;
    $valb = $b+0;
    if($vala>0 && $valb>0){
      $producto = $vala*$valb;
    }else{
      $producto = 0;
    }
    return $producto;
  }

  function Factorial($inicial, $maximo){
  	$factorial = 1;
  	for ($i = $inicial; $i <= $maximo; $i++) {
	    $factorial = $factorial * $i;
	}
	return $factorial;
  }

  function serie_n($a_n, $s_n){
  	return ($a_n+$s_n);
  }

  function LogaritmoNatural($num){
  	return log($num);
  }

  function fnbiseccion($log, $num){
  	return ($log-$num-1);
  }

  function fnSecante($log, $exp, $cos){
  	return ($log-$exp*$cos);
  }

  function funcionvariablereal($num){
  	return ($this->Potencia($num,3)+6*$this->Potencia($num, 2)-3*$num+9);
  	//return (($num*$num)-2*($num)+1);
  }

  function funcionderivada($num){
  	return (3*$this->Potencia($num,2)+12*$num-3);
  	//return ((2*$num)-2);
  }

  function funcionderivadaSegunda($num){
  	return (6*$num+12);
  	//return ((2*$num)-2);
  }

  function valorxseccion($a, $dx, $seccion){
    return ($a+($seccion*$dx));
  }

  function funcionSeccion($x){
    //$ObjFunciones->Exponencial($x1[$n])-1/$x1[$n]
    return ($this->Exponencial($x)-1/$x);
  }

  function funciondeltax($a, $b ,$k){
    return (($b-$a)/$k);
  }

  var $filas;
  var $columnas;
  var $matriz;

  function getGaussSolution($m){
    $this->matriz = $m;
    $this->filas = count($m);
    $this->columnas = count($m['1']);
    echo "<pre>Matriz Ingresada</pre>";
    $this->mostrarMatriz();
    echo "<pre>Inicio de proceso</pre>";
    for($x = 1; $x <= $this->filas; $x++){
      $pivote = $this->matriz[$x][$x];
      /*if($pivote == 0){
        echo "<pre>El sistema no tiene solucion.</pre>";
        return;
      }*/
      for($i = $x; $i <= $this->filas; $i++ ){
        for($j = $x; $j <= $this->columnas; $j++ ){
          if($i == $x) {
            $this->matriz[$i][$j] /= $pivote;
            /*if($this->matriz[$i][$j] != 0 && $pivote != 0){
              $this->matriz[$i][$j] /= $pivote;
            }else{
              $this->matriz[$i][$j] = 0;
            }*/
            continue;
          } elseif($j == $x && $i != $x){
            $aux = $this->matriz[$i][$j] * (-1);
          }
          $this->matriz[$i][$j] = $this->matriz[$x][$j] * $aux + $this->matriz[$i][$j];
        }
        $this->mostrarMatriz();
      }
    }

    for($x = $this->filas; $x > 0; $x--){
      $pivote = $this->matriz[$x][$x];
      for($i = $x-1; $i > 0; $i-- ){
        for($j = $x; $j <= $this->columnas; $j++ ){
          if($j == $x){
            $aux = $this->matriz[$i][$j] * (-1);
          }
          $this->matriz[$i][$j] = $this->matriz[$x][$j] * $aux + $this->matriz[$i][$j];
        }
        $this->mostrarMatriz();
      }
    }
  }

  function mostrarMatriz(){
    $response = '<style type="text/css">
    .inputcel{
      text-align: center;
        width: 40px;
        font-size: 13px;
    }
    .gridtable {
      font-family: verdana,arial,sans-serif;
      font-size:11px;
      color:#333333;
      border-width: 1px;
      border-color: #666666;
      border-collapse: collapse;
    }
    .gridtable th {
      border-width: 1px;
      padding: 2px;
      border-style: solid;
      border-color: #666666;
      background-color: #dedede;
      text-align: center;
    }
    .gridtable td {
      border-width: 1px;
      padding: 2px;
      border-style: solid;
      border-color: #666666;
      text-align: center;
      background-color: #ffffff;
    }
  </style>';
    $response .= '<table width="30%"><tr><td>';
    $response .= '<table border="1" align="center" class="gridtable table table-striped table-bordered">
      <tr>
        <th>N&ordm;</th>';
      for($col = 1; $col < $this->columnas; $col++ ){
        $response .= '<th>x_'.$col.'</th>';
      }
        $response .= '<th>b</th>
      </tr>';
      for($i = 1; $i <= $this->filas; $i++ ){
      $response .= '<tr>
        <th>'.$i.'</th>';
        for($j = 1; $j <= $this->columnas; $j++ ){
        $response .='<td>'.round($this->matriz[$i][$j], 2).'</td>';
        }
      $response .= '</tr>';
      }
    $response .='</table></td></tr></table>';
    echo $response;
  }
}
?>