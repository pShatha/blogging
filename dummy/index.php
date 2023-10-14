<?php

 class A{
    const B = 123;
    public  $a = "s";
   
     function __construct(){
       $this->a = "shatha";
     }

     function print(){
       echo $this->a ;
      }

    function __destruct(){
        echo "<br>";
        echo "this is destruct";
    }
}


class B extends A{

    // public  $a = "s";
     function __construct(){
       $this->a = "shatha";
     }

     function print(){
        echo "f" ;
      }

    function __destruct(){
        echo "<br>";
        echo "this is destruct2";
    }
}

$obj = new B();

echo B::B;


