<?php 

// Modify this function to get its tests passing.
// 
// Remember: Don't change the name of the function. Just modify its body.
// 
// Run `bin/check` from the command line to execute the automated tests.

function filterNumbers($arr) {
	$new_arr = array();
 	foreach($arr as $num) {
		if($num < 10) {
			array_push($new_arr, $num);
		}
	}
	return $new_arr;
}

// Write your own "tests" below. Refer to the the examples from exercise #1.

echo "\nTesting that all numbers greater than or equal to 10 are removed. Should return array(4,5,7).\n";
if (filterNumbers(array(4,21,5,7,13)) == array(4,5,7)) {
  echo "Success!";
}
else{
  echo "Failed!";
}
echo "\n-------------------------------------------------------------------\n";

echo "\nTesting that all numbers greater than or equal to 10 are removed. Should return array(1,3).\n";
if (filterNumbers(array(44,21,14,1,3,10)) == array(1,3)) {
  echo "Success!";
}
else{
  echo "Failed!";
}
echo "\n-------------------------------------------------------------------\n";

echo "\nTesting that all numbers greater than or equal to 10 are removed. Should return array(1,3).\n";
if (filterNumbers(array(4,14,3,10)) == array(4,3)) {
  echo "Success!";
}
else{
  echo "Failed!";
}
echo "\n-------------------------------------------------------------------\n";

echo "\nTesting that all numbers greater than or equal to 10 are removed. Should return array(9,2,7).\n";
if (filterNumbers(array(16,9,11,2,7)) == array(9,2,7)) {
  echo "Success!";
}
else{
  echo "Failed!";
}
echo "\n-------------------------------------------------------------------\n";
?>
