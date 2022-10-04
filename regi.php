<?php
require_once('config.php');
?>
<html>
    <head>
        <title> Doctor Appoinment </title>
</head>
<body>
<style>
body {
  background-image: url('https://img.freepik.com/premium-photo/medical-doctor-workspace-concept-with-medical-equipment-color-background_44344-1492.jpg?w=2000');
  background-repeat: no-repeat;
  background-attachment: fixed; 
  background-size: 100% 100%;
}
</style>
    <div>
        <?php 
        if(isset($_POST['create'])){
            $Pname=$_POST['Pname'];
            $PhoneNumber=$_POST['PhoneNumber'];
            $Email=$_POST['Email'];
            $Appoinment=$_POST['Appoinment'];
            $time=$_POST['time'];
            $Doctor=$_POST['Doctor'];
            $Issue=$_POST['Issue'];

            $sql = "INSERT INTO users(Name,PhoneNumber,Email,Appoinment ,time , Doctor,Issue) VALUES (?,?,?,?,?,?,?)";
            $STMTinsert = $db->prepare($sql);
            $result = $STMTinsert->execute([$Pname , $PhoneNumber , $Email , $Appoinment , $time , $Doctor , $Issue]);
            if($result){
                echo'Successfully Booked Your Appoinment ';
            }
            else {
                echo 'There is a Error uh !';
            }

        }
        ?>
</div>
<DIV>
<form action="regi.php" method = "POST">
<div class="container">
    <h1>Register </h1>
    <p> Fill up the form with correct values </p>

    <label for="Pname"><b> Name <b></label><br><br>
<input type="text" name="Pname" required> <br><br>
<label for="PhoneNumber"><b> Phone Number <b></label><br><br>
    <input type="text" name="PhoneNumber" required><br><br>
    <label for="Email"><b> Email<b></label><br><br>
        <input type="email" name="Email" required><br><br>
        <label for="Appoinment"><b> Appoinment Date <b></label><br><br>
            <input type="date" name="Appoinment" required><br><br>
            <label for="time"><b> Appoinment time <b></label><br><br>
            <input type="time" name="time" required><br><br>
            <label for="Doctor"><b> Doctor Date<b></label><br><br>
                <input type="text" name="Doctor" required><br><br>
                <label for="Issue"><b> Health Issue<b></label><br><br>
                <input type="text" name="Issue" required><br><br>
                <input type="reset" name="clean" value="Reset"><br><br>
        <input id ="red" type="submit" name="create" Value="Appoint Now !"> <br> <br>
      
</div>
</form>
<center> 
<h1> <a href="index.html">Back </a> </h1>
    </center>
    </body>
</html>