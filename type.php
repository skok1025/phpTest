<?php 
  $message = "Hello World";
  echo gettype($message);
  
  settype($message, 'int');
  
  echo is_int(10);
  
  echo is_string('Hello World');
  
  echo is_iterable([]);
  
  echo isset($message);
  $message = null;
  echo empty($message);
  
  echo var_dump(boolval(1));
  
  // int -> string
  strval(10);
  
  $var = [
      'message' => 'Hello World'
  ];
  
  //var_export($var);
  
  echo serialize($var);
  
?>