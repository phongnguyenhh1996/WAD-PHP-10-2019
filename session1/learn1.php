<?php
  echo "Hello world!"
?>
<br/>
<?php
  // Variable
  $myClass = "WAD PHP";
  echo $myClass;
  // Bad practice
  $loptui = "WAD PHP";
  // using camel
  $defineMyUserForClass = "test";
  // using meanging name variable
  // bad practice
  $ab = "Demo test";
  // basic operator: +, -, *, /, %
  $numberOne = 7;
  $numberTwo = 8;
  echo "<br>";
  echo $numberOne + $numberTwo;
  // function in PHP
  function myFunction() {
    echo "test function";
  }
  echo "<br>";
  myFunction();
  function myFunction1($x = 5, $y = 4) {
    return $x*$y;
  }
  echo "<br>";
  echo myFunction1();
  echo "<br>";
  echo myFunction1(1, 1);
?>