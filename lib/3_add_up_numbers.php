<?php 

// Modify this function to get its tests passing.
// 
// Remember: Don't change the name of the function. Just modify its body.
// 
// Run `bin/check` from the command line to execute the automated tests.

function addUpNumbers($arr) {
  $total = 0;
  foreach($arr as $item) {
	$total += $item;
  }
  return $total;
}

// Write your own "tests" below. Refer to the the examples from exercise #1.

echo "\nTesting that adds up all the numbers in $arr. Should return 30.\n";
if (addUpNumbers(array(12,3,4,11)) == 30) {
  echo "Success!";
}
else{
  echo "Failed!";
}
echo "\n-------------------------------------------------------------------\n";

echo "\nTesting that adds up all the numbers in $arr. Should return 32.\n";
if (addUpNumbers(array(21,3,8)) == 32) {
  echo "Success!";
}
else{
  echo "Failed!";
}
echo "\n-------------------------------------------------------------------\n";

echo "\nTesting that adds up all the numbers in $arr. Should return 30.\n";
if (addUpNumbers(array(12,-4,16)) == 24) {
  echo "Success!";
}
else{
  echo "Failed!";
}
echo "\n-------------------------------------------------------------------\n";

echo "\nTesting that adds up all the numbers in $arr. Should return -20.\n";
if (addUpNumbers(array(-3,-6,-11)) == -20) {
  echo "Success!";
}
else{
  echo "Failed!";
}
echo "\n-------------------------------------------------------------------\n";

echo "\n###################################################################\n";
echo "Tests complete.\n";

?>
