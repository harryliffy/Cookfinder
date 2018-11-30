<?php

// Author: Harry Lifford
// Project Name: Cookfinder
// Model View Controller framework
// FrameworkDate:21/10/2017
// Technologies: Ajax, Php, PDO, Bootstrap




//flask.io framework for cookfinder web application

include ('database.php');  // include PDO database connection 

class PageTracker{ // Page navigation tab indicator Class

    function NavTracker($NavName){ // active page tracker
        echo'
        <script>
            var element = document.getElementById("'.$NavName.'");
            element.classList.add("expanded");
        </script>'; // Display javascript to activate the (expanded) property

    }//end nav  tracker
}//end object page tracker 


// Glossary 
        // User class
                // 1. Transactions
                // 2. Autofill value using javascript


class User{   // User class


    protected $now; // for setting current date

    protected $conn; //


    public function __construct(){
    $database= new Database();
    $db=$database->db_con;
    $this->conn=$db; 

    //$this->db_con=$conn;
        }

// 1. Transactions
        function transactionStatus($transactionid){ //order transaction check if it is an   approved

            $stmtquery = $this->conn->prepare("SELECT * FROM transaction WHERE transaction_id=:transactionId  ");
            $stmtquery->execute(array(":transactionId"=>$transactionid));
            $rowquery=$stmtquery->fetch(PDO::FETCH_ASSOC);
            $se= $rowquery['status'];
            if ($se > 0){
                return true;
                
            }
            else{
              return false;   
            }
                       
          }


          // 1.2 get customer approved transaction awiting chefs approval

 
          function transactionApproved(){ //order transaction check if it is an   approved
            $UserId=$_SESSION['user_session'];
            $ustatus =0;
           $status="1";
            $stmt = $db_con->prepare("SELECT * FROM transaction WHERE user_id=:userId AND status=:ustatus  ");
            $stmt->execute(array(":userId"=>$UserId,":ustatus"=>$ustatus ));
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
            {
              // get chef details
                $transactionOrder= $row['transaction_id'];  //dish id
                
                echo $transactionOrder;
            
                       
          }
        }

    // 2. Autofill value using javascript
    function autofill($value1, $ans){
echo
     "  <script>
            // javascript to toggle chef data
   $(document).ready(function(){
  document.getElementById('statsEval').value='.$value1.';
  ";
  if ($ans="good"){
      echo"
      
      
      ";
  }
  echo"
   // alert ('hello world');
   });
   
   </script> ";
    }

    
}