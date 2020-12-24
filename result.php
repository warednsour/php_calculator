<?php

$number1 = $_POST['number1'];
$number2 = $_POST['number2'];
$plus = $_POST['plus'];
$minus = $_POST['minus'];
$omnoshenia = $_POST['omnoshenia'];
$delenia = $_POST['delenia'];
$operation = $_POST['operation'];

echo $operation;

  if(isset($_POST['submit']))
  {
    if(is_numeric($number1) && is_numeric($number2)){

      if($operation == 'plus') {
        $result = $number1 + $number2;
      }
      if($operation == 'minus'){
        $result = $number1 - $number2;
      }
      if($operation == 'delenia'){
        $result = $number1 / $number2;
      }
      if($operation == 'omnoshenia'){
        $result = $number1 * $number2;
      }

      echo '<p> the result is' . $result . '</p>'  ;

    }

  }

 ?>
