<?php


//////////////// pattan 1

/*   for ($row = 1; $row <= 5; $row++){
    for($col = 1; $col<= $row; $col++){
        echo "@";
    }
    echo "<br>";
  }
 */
/////////////////////Pattan 
/*    $n = 5; //size
  for ($i = 1; $i <= $n; $i++){ //outer loop
  for ($j = $n-1; $j>= $i; $j--){ //space loop
    printf (" "); //whitespace
  }
 for($k = 1; $k <= $i; $k++){ //print loop
    printf("*");
 }
 printf("<br>"); 
}  */
//////////////////////////
/* $n=5;
for( $i = 1; $i<= $n; $i++){
  for($j = $i; $j<= $n; $j++){
    printf(" ");
  }
  printf("*");
} */
// this loop prints the upper half of the star pattern
for($i=1; $i<=5; $i++) {
  for($j=1; $j<=$i; $j++) 
  {
  echo '*';
  }
  echo '<br>';
  }
  // this loop prints the lower half of the pattern
  for($i=1; $i<=5; $i++) {
  for($j=4; $j>=$i; $j--) 
  {
  echo '*';
  }
  echo '<br>';
  }
//////////paramite design 
/*  $n=5;
 
for($i=1;$i<=$n; $i++){
    for($j=1;$j<=$n-$i;$j++){
      echo "&nbsp;&nbsp;";
    }
    for($k=1;$k<=$i;$k++){
     echo "*&nbsp;&nbsp;";
    }
echo "<br />";
} */
/////// fornt and back print
/* for ($i = 9; $i >= 1; $i--) {
  echo $i . " " ;
}

for ($i = 1; $i <= 9; $i++) {
  echo $i . " ";
} */




//////////// 9 multiple / ////////////

/* $a = 9;
for($i = 1; $i <= 10; $i++) {
  echo "$a * $i =" . $a * $i . "<br>";
} */
/////////////number print ///////////
/* for ($i = 1; $i <= 10; $i++) {
  for ($j = 1; $j <= 10; $j++) {
    echo $i * $j . "\n";
  }
  echo "\n";
}
 */


?>