<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SiGN IN</title>
</head>
<body>

  <!-- <form action="action_page.php" method="post"> -->
  <form action="" method="post">
        
    <div class="container">
      <img src="login1.jpg" alt="login" class="center">
      <div class="centered">
        
          <div class="transbox">

            <h1>Sign In</h1>
            <br>
            <label for="uname"><b>Username</b></label>
            <br>
            <input type="text" placeholder="Enter Username" name="uname" required><br>
            <br>
      
            <label for="psw"><b>Password</b></label>
            <br>
            <input type="password" placeholder="Enter Password" name="psw" required><br>
            <br>

            <button type="submit" name="login">Login</button><br>
            <label>
            <input type="checkbox" checked="checked" name="remember"> Remember me
            </label><br>
            <div class="container" ><br>
              <button type="button" class="cancelbtn">Cancel</button><br>
              <span class="psw">Forgot <a href="password.html">password?</a></span>

            </div>
          </div>>
         
        
      </div>
    </form>


    <style>  
    .h1 {
      text-align: center;
      font-weight: bold;
      color: rgb(0, 0, 0);}
    p {
      text-align: center;
      font-weight: bold;}
    div {
      text-align: center;
      font-weight: bold;}
        
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
      height: 400px;
      border-radius : 10%;
      background-color: #bce2d4;
      border: 1px solid rgb(238, 230, 230);
      font-weight: bold;
      opacity: 0.9;}

      
    </style>


    <?php

if(isset($_POST['login'])){

  $User_Name = $_POST['uname'];
  $Password  = $_POST['psw'];

  $servername = "localhost";
$username = "sharin_snigdha";
$password = "12345";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

//$result = $mysqli->query("SELECT * FROM information WHERE username = '$User_Name' AND password = '$Password' ");
//$row = $result->fetch_assoc();

$sql = "SELECT username, password FROM infromation WHERE username='$User_Name' AND password='$Password'";
$result = $conn->query($sql);

if ($result->num_rows > 0)
  {
      $message = "LOGIN SUCCESSFULL.!";
      echo "$message";
  }else {
      $message = "LOGIN UNSUCCESSFULL.!";
      echo "$message";
  }

$conn->close();



}


  // $mysqli = new mysqli("localhost","root","","sign_up");
  // $result = $mysqli->query("SELECT * FROM information WHERE User_Name = '$User_Name' AND Password = '$Password' ");
  // $row = $result->fetch_assoc();
  
  // if($row['User_Name'] == $User_Name && $row['Password'] == $Password)
  // {
  //     $message = "LOGIN SUCCESSFULL.!"
  //     echo "<script type='text/javascript'>alert('$message');</script";
  // }else {
  //     $message = "LOGIN UNSUCCESSFULL.!"
  //     echo "<script type='text/javascript'>alert('$message');</script";
  // }


?>


  </body>
</html>

