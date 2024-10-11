<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>

  <form action="" method="post"> 
    
    <div class="container">

      <img src="login1.jpg" alt="login" class="center">


        <div class="centered">
          <div class="transbox">
            
            <h1>Register</h1>
            <p>Please fill in this form to create an account.</p>


            <label for="uname"><b>Username</b></label>
            <br>
            <input type="text" placeholder="Enter Username" name="uname" required><br>
            <br>
      
  
            <label for="email"><b>Email:</b></label> 
            <br>
            <input type="text" placeholder="Enter Email" name="email" id="email" required>
            <br>
      
  
            <br><label for="psw"><b>Password:</b></label>
            <br>
            <input type="password" placeholder="Enter Password" name="psw" id="psw" required>
            <br>
  
  
            <p>By creating an account you agree to our <a href="terms&policy.html">Terms & Privacy</a>.</p>
            <button type="submit" class="registerbtn" name = "Register" >Register</button>

            <div class="container signin">
            <p>Already have an account? <a href="signin.html">Sign in</a>.</p>

          </div>
        </div>
    </div>
  
  </form>  
  
    <style>   

      .h1 {
        text-align: center;}
      p {
        text-align: center;}
      div {
        text-align: center;}
      
      .center {
         display: block;
         margin-left: auto;
         margin-right: auto;
         width: 90%;} 

      .centered {
         position: absolute;
         top: 50%;
         left: 50%;
         transform: translate(-50%, -50%);} 

         div.transbox {
           margin: auto;
           width: 300px;
           height: 410px;
           border-radius : 10%;
           background-color: #bce2d4;
           border: 1px solid rgb(238, 230, 230);
           font-weight: bold;
           opacity: 0.9;}
    
     </style>

<?php
if(isset($_POST['Register'])){

$servername = "localhost";
$username = "sharin_snigdha";
$password = "12345";
$dbname = "sign_up";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());

}

$User_Name = $_POST['uname'];
$Email = $_POST['email'];
$Password= $_POST['psw'];

$sql = "INSERT INTO information (username, email, password)
VALUES ('$User_Name', '$Email', '$Password')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
}
?>

          
</body>
</html>

