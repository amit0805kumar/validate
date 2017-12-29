<html>
<head>
    <link rel="stylesheet" href="stle.css">
     <script src="script.js"></script>
</head>
<body>
<div id="outer">
    <h1 id="heading">Validation Form</h1>
    <!--INPUTS-->
    <form method="post" action="index.php">
    
        <input type="text" id="loginid" placeholder="LOGIN" onkeyup="UpdateLength('loginid','sizelogin')"  maxlength="25" ><br/>
        <div id="sizelogin"></div>
        <input type="password" id="password" placeholder="PASSWORD"  onkeyup="UpdateLength('password','sizepass')" maxlength="20"><br>
        <div id="sizepass"></div>
        
        <input type="password" id="cpassword" placeholder="CONFIRM PASSWORD"  onkeyup="UpdateLength('cpassword','sizecpass')" maxlength="20"><br>
        <div id="sizecpass"></div>
        <select class="gender" placeholder="GENDER">
            <option class="gender" style="color:blue;">-SELECT-</option>
            <option class="gender" value="MALE">MALE</option>
            <option class="gender" value="FEMALE">FEMALE</option>
            <option class="gender" value="TRANs">TRANS</option>
            
        </select><br><br>
        <input type="text" id="email" placeholder="E-MAIL"  onkeyup="UpdateLength('email','sizeemail')" maxlength="25"><br>
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
