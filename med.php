
<?php
    $database="validate";
    $password="";
    $servername="localhost";
    $username="root";
    $conn = new mysqli($servername,$username,$password,$database);
    if($conn->connect_error)
    {
    die("Connect failes: ".$conn->connect_error);
    }
echo
    
'<html>
    <head>
        
        <style>
            *
            {
                margin: 0px;
            }
#header
            {
                margin-top: 200px;
                width: 100%;
                height: 200px;
                background: purple;
                position: relative;
                
            }
#text
            {
                color: white;
                 font-family: sans-serif;
                font-size: 50px;
                margin-left: 100px;
                position: absolute;
                margin-top: 50px;
                transition: all 0.5s;
            }
#header:hover >#text
            {
           
                margin-left: 150px;
            }
#cmd
{
width:130px;
height:50px;
font-family:sans;
color:white;
background:#d500f9;
padding:5px;
border:1px solid;
border-radius:7px;
margin-left:400px;
font-size:20px;
transition:all 0.3s;
}
#cmd:hover
{
cursor: pointer;
color:#d500f9;
background:white;
margin-left:420px;
}
        </style>
    </head><body>
    <div id="header">
        ';
        if(!empty($_POST["login"]) && !empty($_POST["pass"]) && !empty($_POST["gender"]) && !empty($_POST["email"]))
        {
$login=$_POST["login"];
$pass=$_POST["pass"];
$email=$_POST["email"];
$gen=$_POST["gender"];
$sql="insert into inputs value ('$login','$pass','$gen','$email')";
$conn->query($sql);
echo    '<p id="text"><a style="background:#00DED1;">DATA</a> INSERTED</p>';
            
        }
else
{
    echo    '<p id="text"><a style="color:red;">DATA NOT INSERTED</a></p>';
}
 echo   '</div>';

echo '<br>
    <a href="index.html"><input type="button" id="cmd" value="GO Home &gt;"></input></a>
';

  echo'</body>
</html>';
?>