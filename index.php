<html>
<head>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div id="outer">
    <h1 id="heading">Validation Form</h1>
    <!--INPUTS-->
    <form method="post" action="index.php">
    
        <input type="text" id="loginid" placeholder="LOGIN"><br><br>
        <input type="password" id="password" placeholder="PASSWORD"><br><br>
        <input type="password" id="cpassword" placeholder="CONFIRM PASSWORD"><br><br>
        <select class="gender" placeholder="GENDER">
            <option class="gender" style="color:blue;">-SELECT-</option>
            <option class="gender" value="MALE">MALE</option>
            <option class="gender" value="FEMALE">FEMALE</option>
            <option class="gender" value="TRANs">TRANS</option>
            
        </select><br><br>
        <input type="text" id="email" placeholder="E-MAIL"><br><br>
        
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
