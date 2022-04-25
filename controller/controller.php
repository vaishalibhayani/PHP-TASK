<?php
require_once("model/model.php");
class controller extends model 
{
    public function __construct()
    {
        parent:: __construct();

        // proggrame logic here

        if($_POST){  
            $num = $_POST['number'];  
        
            if($num % 3 == 0) {
                  echo "<h2 align='center'>Fizz</h2>";
                      } elseif ($num % 5 == 0) {
                  echo "<h2 align='center'>Buzz</h2>";
                      } elseif ($num) {
                 echo "<h2 align='center'>$num</h2>";
            }
        }

    
        // load view used routing

        if($_SERVER["PATH_INFO"])
        {
            switch($_SERVER["PATH_INFO"])
            {
               case '/':

                require_once("index.php");
                require_once("header.php");
                require_once("proggrame.php");
                break;
                default:
                require_once("index.php");
                require_once("404.php");
                
                break; 

            }
        }



    }
}

$obj=new controller;
?>