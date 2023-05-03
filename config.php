<?php

// Server Connectivity
$server = "localhost";
$user = "root";
$pass = "";
$db = "dbnsti";
$con = mysqli_connect($server,$user,$pass,$db);
// if ($con) {
//     echo "Connected!";
// }else{
//     echo "not connected";
// }


//DB Creation
// $sql = "CREATE DATABASE dbnsti";
// $output = mysqli_query($con, $sql);
// if (!$output) {
//     echo "<br>DB Not Created";
// }else{echo "<br>DB Created";}


// create a table
// $sql = "CREATE TABLE adit(
//     reg_no int not null primary key,
//     trainee_name varchar(50) not null,
//     phone_no int not null,
//     nsti varchar(50) not null,
//     reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
//     )";
// $output = mysqli_query($con, $sql);

// if (!$output) {
//     echo "<br>Table not created";
// }else{echo "<br>Table created";}



// insert records into adit table
if(isset($_POST['Onclick'])){
$reg = $_POST['Reg_No'];
$tname = $_POST['T_name'];
$tmobile = $_POST['Mobile'];
$nsti = $_POST['nsti'];
$date = $_POST['date'];

$sql = "INSERT INTO adit(reg_no, trainee_name, phone_no, nsti, reg_date)
values('$reg','$tname','$tmobile', '$nsti','$date')";

$output = mysqli_query($con, $sql);

if ($output) {
    echo "<br>Inserted";
}else{echo "<br>Not Inserted";}
}



// delete
if(isset($_POST['Ondelete'])){
  $reg = $_POST['Reg_No'];

$d_sql = "DELETE FROM adit WHERE adit.reg_no=$reg";
$output = mysqli_query($con, $d_sql);
if ($output) {
    echo "<br>Record Deleted";
}else{echo "<br>Not Deleted";}
}


// update
if(isset($_POST['Onedit'])){
  $reg = $_POST['Reg_No'];
  $tname = $_POST['T_name'];
  $tmobile = $_POST['Mobile'];
  $nsti = $_POST['nsti'];
  $date = $_POST['date'];
$u_sql = "UPDATE `adit` SET `trainee_name` = '$tname', `phone_no`= '$tmobile', `nsti` = '$nsti', reg_date = $date WHERE `adit`.`reg_no` = $reg;";
$output = mysqli_query($con, $u_sql);
if ($output) {
    echo "<br>Record Updated";
}else{echo "<br>Not Updated";}
}


?>