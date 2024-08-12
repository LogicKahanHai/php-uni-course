<html>
<head>
  <title>Arrays</title>
</head>
<body>
  <?php

  //This is a function to print a normal array
  function printArray($array, $delimeter = ",&nbsp;") {
    $count = count($array);

   foreach($array as $value) {
    if($count == 1) {
      echo $value;
    } else {
      echo $value . $delimeter;
    }
    $count--;
   }
  }

    $strArray = array("Egg", "Tomato", "Beans");
    echo $array[0];
    echo "<br>";
    echo $array[1];
    echo "<br>";
    echo $array[2];
    $assocArray = array("Egg" => 1, "Tomato" => 2, "Beans" => 3);
    echo "<br>";
    echo "Assciative Array: <br>";

    // This is to print all the values in the associative array
    foreach($assocArray as $key => $value) {
      echo $key . " = " . $value . "<br>";
    }
    echo "<br>";
     
    //This part of the code adds a new value to the array and prints it
    echo "<b>Adding Cucumber to the array</b><br>";
    array_push($strArray, "Cucumber");
    echo "New Array: <br>";
    printArray($strArray);

    //This is a self implementation of removing a particular value from the list

    echo "<br><br>";
    echo "<b>Removing 'Tomato' from the array</b><br>";
    $newArray = array();
    foreach($strArray as $value) {
      //It checks of there is a value in the list or not
      if($value != "Tomato") {
        array_push($newArray, $value);
        
      }
    }
    echo "New Array: <br>";
    printArray($newArray);


    //The function that automatically removes a value from the list
    echo "<br><br>";
    echo "<b>Removing 'Beans' from the array</b><br>";
    unset($newArray[1]);
    echo "New Array: <br>";
    printArray($newArray);




    // To get the length of the array
    echo "<br><br>";
    $count = count($newArray);
    echo "The final count of the array is: ". $count;

    //There is another function length() that can be used to get the length of the array (There is somthing wrong here.)

    /*echo "<br><br>";*/
    /*$length = length($newArray);*/
    /*echo "The final length of the array is: ". $length;*/




    echo "<br><br>";
    echo "The final array is: <br>";
    printArray($newArray);
      


   

  ?>
</body 
</html>
