<?php

/*
 * Complete the 'superDigit' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts following parameters:
 *  1. STRING n
 *  2. INTEGER k
 */

function superDigit($n, $k) {
    $count=0;
$new='';
for($i=0;$i<$k;$i++)$new.=$n;
while(true){
    for ($i = 0; $i < strlen($new); $i++){
    $digit = (int)$new[$i];
    $count += $digit;
  }
  
 $s = (string)$count;
 $digitCount = strlen($s);
 $string = (string)$count;
 if($digitCount>=2){$new=$string;$count=0;}
 else break;
}
return $count;

}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$first_multiple_input = explode(' ', rtrim(fgets(STDIN)));

$n = $first_multiple_input[0];

$k = intval($first_multiple_input[1]);

$result = superDigit($n, $k);

fwrite($fptr, $result . "\n");

fclose($fptr);