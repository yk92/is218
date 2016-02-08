<?php


echo '<a href="index.php?page=about">About</a></br>';

echo '<a href="index.php?page=contact">Contact</a></br>';

echo '<a href="' . 'index.php">Home</a></br>';

$page = 'homepage';

  

  

//print_r($_SERVER) prints the contents in the SERVER superglobal; 

echo $_SERVER['REQUEST_METHOD'] . '</br>';
 
  

if(isset($_GET['page'])) {

  $page = $_GET['page'];
}

$obj = new $page;

if($_SERVER['REQUEST_METHOD'] == 'GET') {

  $obj->get();

} else {

  $obj->post();

}



  

class about {

  public function get() {

    echo 'about';

  }

}

class homepage {

  public function get() {

    echo 'homepage';

  }

}

class contact {

  public function get()  {

      echo '<form action="index.php?page=contact" method="post">

       <p>Your name: <input type="text" name="fullname" /></p>

       <p>Your age: <input type="text" name="age" /></p>

       <p>Your city: <input type="text" name="city" /></p>

       <p><input type="submit" /></p>

       <input type="reset" />

       </form>';

  }



  public function post() {

    foreach ($_POST as $key => $value){ #example for loop using foreach to output contents of $_POST
        echo $key . "=>" . $value . '</br>';
    }
  }
#end of index.php file
}
?>
