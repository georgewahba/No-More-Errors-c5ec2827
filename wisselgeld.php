<?php

try {
  if (!isset($argv[1])) {
    throw new Exception("Je hebt geen bedrag meegegeven dat omgewisseld dient te worden");

  }

} catch (Exception $ex){
  echo 'ERROR:' .$ex->getMessage();
  exit();
}

try {
  if ($argv[1] < "0") {
    throw new Exception("Ik kan geen negatief bedrag wisselen");

  }

} catch (Exception $ex){
  echo 'ERROR:' .$ex->getMessage();
  exit();
}

try {
  if (!is_numeric($argv[1])) {
    throw new Exception("Je hebt geen geldig bedrag meegegeven");

  }

} catch (Exception $ex){
  echo 'ERROR:' .$ex->getMessage();
  exit();
}



$eenheid=array(500, 200, 100, 50, 20, 10, 5, 2, 1);
$getal= intval($argv[1]);

function berekeneneuro($getal, $eenheid){

foreach ($eenheid as $key => $value) {
  if ($getal > $value || $getal==$value) {
    $over=floor($getal/$value);
    $getal=$getal%$value;
    print($over. "x". $value ." EURO".PHP_EOL);
    }
  }
}

$getal1=round(intval(($argv[1]-floor($argv[1]))*100)/5 )*5;
$cent=array(50,20,10,5);

function berekenencent($getal1, $cent){

foreach ($cent as $key => $value) {
  if ($getal1 >$value || $getal1==$value) {
    $over=floor($getal1/$value);
    $getal1=$getal1%$value;
    print($over. "x". $value ." CENT".PHP_EOL);
    }
  }
}

berekeneneuro($getal, $eenheid);

berekenencent($getal1, $cent);
