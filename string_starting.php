<?php 
    // Function to check string starting
  // with given substring
  function startsWith ($string, $startString) {
      $len = strlen($startString);
      return (substr($string, 0, $len) === $startString);
  }

//   // Main function
//   if(startsWith("1001","1"))
//   echo "True";
//   else
//   echo "False";
?>