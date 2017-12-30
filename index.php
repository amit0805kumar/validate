<html>
<head>
    <link rel="stylesheet" href="style.css">
     <script src="script.js"></script>
   <link href="https://fonts.googleapis.com/css?family=Concert+One|Fredoka+One|Permanent+Marker|Righteous" rel="stylesheet">
</head>
<body>
<div id="outer">
    <h1 id="heading">Validation Form</h1>
    <!--INPUTS-->
    <form method="post" action="index.php">
    
        <input type="text" id="loginid" placeholder="LOGIN" onkeyup="UpdateLength('loginid','sizelogin')"  maxlength="25" name="login" ><br/>
        <div id="sizelogin"></div>
        <input type="password" id="password" name="pass" placeholder="PASSWORD"  onkeyup="UpdateLength('password','sizepass')" maxlength="20"><br>
        <div id="sizepass"></div>
        
        <input type="password" id="cpassword" name="cpass" placeholder="CONFIRM PASSWORD"  onkeyup="UpdateLength('cpassword','sizecpass')" maxlength="20"><br>
        <div id="sizecpass"></div>
        <select class="gender" placeholder="GENDER" name="gender">
            <option class="gender" style="color:blue;">-SELECT-</option>
            <option class="gender" value="M">MALE</option>
            <option class="gender" value="F">FEMALE</option>
            <option class="gender" value="T">TRANS</option>
            
        </select><br><br>
        <input type="text" id="email" placeholder="E-MAIL" name="email"  onkeyup="UpdateLength('email','sizeemail')" maxlength="25"><br>
        <div id="sizeemail"></div>
        
        <input type="submit" id="submit" value="SUBMIT"><br><br>
    </form>
    
</div>
</body>
</html>

<?php
    $database="validate";
    $password="";
    $servername="localhost";
    $username="root";
    $conn = new mysqli($servername,$username,$password,$database);
?>
