<?php
require_once "../config.php";
class User{
   private $username;
   private $email;
   private $password;

//    function ___construct()
//    {
//           $this->username='shatha3';
//           $this->email = 'shatha.muhanna9@gmail.com';
//           $this->password = "Shatha@gmail.com";

//    }
   function __construct($username,$email,$password){
          $this->username=$username;
          $this->email = $email;
          $this->password = $password;
   }
   public function signup(){
       global $connect;
       $password = md5($this->password);
       $username = $this->username;
       $email = $this->email;
      
    // try{
        // $sql ="INSERT INTO `user` (`username`,`email`,`password`)VALUES('$username','$email','$password')";
        $sql ="INSERT INTO `user` (`username`,`email`,`password`)VALUES(?,?,?)";
        $check = $connect->prepare($sql);
        $check->bind_param("sss",$username,$email,$password);
      
         $check->execute();

    //    $connect->query($sql) ;

        // return  'the result is '.$result;
    // }catch(){
    //     Exception $e;
    //     return $connect->connect_error;
    // }

     return  "The user id is ".$connect->insert_id;  
   }

   public function  get_username(){
    return $this->username;
   }
}

$oBj = new User("shatha6",'shatha','shatha');
echo $oBj->signup();

    // echo $oBj->get_username();
  
 


