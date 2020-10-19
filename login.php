<?php require_once 'connection.php'; ?>

<?php
    if(isset($_POST['Login'])){
          print_r($_POST);


          $email = $_POST['email'];
          $upass = $_POST['pass'];
          $criteria = array("Email Address"=> $email);
          $query = $collection->userdata($criteria);
          //var_dump($query);
          if(empty($query)){
              echo "Email ID is not registered.";
          }
          else{

                $pass = $query["Password"];
                if(password_verify($upass,$pass)){
                    $var = setsession($email);
                      echo"<pre>";
                      print_r($_SESSION) ;

          else{
          echo "You have entered a wrong password";
          }
          }

          }
    }
?>
