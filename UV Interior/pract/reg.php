<?php

include "db.php";

session_start();

$annualsalary = 0;
$salary = "";

if ($_SERVER["REQUEST_METHOD"]==="POST") {
    $name = $_POST["name"];
    $id = $_POST["id"];
    $salary = $_POST["salary"];

    //calculate annual salary
    $annualsalary = $salary * 12 ; 

    $_SESSION['annualsalary']=$annualsalary;

    $sql = $conn -> prepare("INSERT INTO EMP(name, id, salary) VALUES (?,?,?)");

    $sql -> bind_param("sid",$name,$id,$salary);

    if ($sql -> execute()) {
        echo "Inserted Sucessfully";
        header("location:reg2.php");
        exit;
    }
}

?>

<html >
    <head>
       <style>

        body{

        background : pink;
        }

        .container {
            width: 350px;
            margin: 100px auto;
            padding: 50px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 0 10px #ccc;
        }

       </style> 
    </head>
  <body>
    <form action = "#" method = "POST">
    <div class = "container">
     <div align = "center" bold>EMPLOY DETAILS</div>  
     <br> 
     <table >
        <tr>
             
        </tr>
        <tr >
            <td> NAME</td>
            <td> <input type = "text" name = "name" placeholder = "name"> </td>
        </tr>
        <tr>
            <td> ID </td>
            <td> <input type = "text" name = "id" placeholder = "id"  ></td>
        </tr>
        <tr>        
            <td> SALARY </td>
            <td> <input type = "text" name = "salary" placeholder = "salary"> </td>
        </tr>
        
        <tr>
          <td colspan = "2" align= "center"><button>Submit </button></td>
        </tr>
     </table>
    </div>





   </form>


  </body>
</html>