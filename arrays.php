<?php
  #this file is a simple php file showing how arrays of diff kinds work

  $array = array(1,2,3,4,5); #basic array

  #to add a value to an existing array 
  $array[] = 6;

  #to access an element of the array
  echo $array[1]; #just like in c/c++ python etc

  /***** good doc at php.net/manual/en/ref.array.php  ******/

  #there are two types of arrays: associative and integer

  $assoc_array = array('one' => 1, 'two' => 2, 'three' => 3); #this is like a python dictionary -> key : value pairs

  #you can push an existing array into an array to make a nested array

  $array[] = $assoc_array; #this makes the next element in the array the actual assoc_array

  #the way to really use objects and arrays is to combine them into arrays of objects

   



?>
