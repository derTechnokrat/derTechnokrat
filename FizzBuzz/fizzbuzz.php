<?php
/*
 * erstes primitives FizzBuzz-Beispiel aus dem Blog
 * http://dertechnokrat.blogspot.com
 *
 * Aufruf auf der Kommandozeile (PHP-CLI) mit 
 * php fizzbuzz.php
 *
 * es werden keine Argumente übergeben
 *
 * Autor: Matthias Danielzik aka derTechnokrat
 *
 * Lizenz: da liegen bestimmt tausende Patente drauf
 *         macht damit, was ihr wollt
 *
*/
function istTeilervon($teiler, $cand) {
  return ($cand % $teiler)==0;
}

$i=1;
while ($i<=100) {
  $antwort = '';
  $antwort.= (istTeilervon(3,$i)?'Fizz':'');
  $antwort.= (istTeilervon(5,$i)?'Buzz':'');
  echo (empty($antwort)?$i:$antwort).' ';
  ++$i;
}

?>
