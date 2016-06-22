<?php 

// Modify this function to get its tests passing.
// 
// Remember: Don't change the name of the function. Just modify its body.
// 
// Run `bin/check` from the command line to execute the automated tests.

function uppercasesAllLetters($str) {
  $str = strtoupper($str);
  return $str;
}

// Write your own "tests" below. Refer to the the examples from exercise #1.
echo "\nTesting that uppercases all letters. Should return HELLO.\n";
if (uppercasesAllLetters("Hello") == "HELLO") {
  echo "Success!";
}
else{
  echo "Failed!";
}
echo "\n-------------------------------------------------------------------\n";

echo "\nTesting that uppercases all letters. Should return BEAUTIFUL.\n";
if (uppercasesAllLetters("beautiful") == "BEAUTIFUL") {
  echo "Success!";
}
else{
  echo "Failed!";
}
echo "\n-------------------------------------------------------------------\n";

echo "\nTesting that uppercases all letters. Should return SOCCER.\n";
if (uppercasesAllLetters("SoccER") == "SOCCER") {
  echo "Success!";
}
else{
  echo "Failed!";
}
echo "\n-------------------------------------------------------------------\n";

echo "\nTesting that uppercases all letters. Should return MOUNTAIN BIKING IS AWESOME.\n";
if (uppercasesAllLetters("mountain biking is awesome") == "MOUNTAIN BIKING IS AWESOME") {
  echo "Success!";
}
else{
  echo "Failed!";
}
echo "\n-------------------------------------------------------------------\n";

echo "\n###################################################################\n";
echo "Tests complete.\n";


?>
