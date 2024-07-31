<html>
  <head>
    <title>Data Types</title>
  </head>
  <body>
    <h1>Data Types</h1>
    <p>PHP supports the following data types:</p>
    <ul>
      <li>String</li>
      <li>Integer</li>
      <li>Float</li>
      <li>Boolean</li>
      <li>Array</li>
      <li>Object</li>
      <li>NULL</li>
    </ul>
    
    <h2>Q. Convert '467' from Decimal to Decimal, Octal, Hex and Binary</h2>
    
  <?php
    echo "467 in decimal is 467 <br>";
    echo "467 in octal is 723 <br>";
    echo "467 in hexadecimal is 1D3 <br>";
    echo "467 in binary is 111010111 <br>";
  ?>

  <h2> Var_dump() function </h2>
  <?php
    $x = 5985;
    echo "var_dump() function returns the data type and value of the variable <br>";
    var_dump($x);
  ?>
  
  <h2> Difference between single and double quotes</h2>
  
  <?php
    $y = 6783;
    echo 'The value of x (in single quotes) is $x <br>';
    echo "The value of x (in double quotes) is $y <br>";
  ?>

  <h2> Strings </h2>
  <?php
    $name = "Rishi";
    echo "$name <br>";
    echo 'My name is $name ';
    ?>
  </body>
</html>
