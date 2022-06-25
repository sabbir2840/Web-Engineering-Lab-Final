<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registratio form</title>
</head>
<body>
    <Form action="" method="post" >


    <input type="submit" name="submit" value="insert">
    <input type="submit" name="submit2" value="edit">
    <link href = "regformstyle.css" type = "text/css" rel = "stylesheet" />    
        <h2>Sign Up</h2>    
        <form name = "form1" action="modified.php" method = "post" enctype = "multipart/form-data" >    
            <div class = "container">    
                <div class = "form_group">    
                    <label>Name:</label>    
                    <input type = "text" name = "name" value = "" required/>    
                </div>    
                <div class = "form_group">    
                    <label>E-mail:</label>    
                    <input type = "text" name = "email" value = "" required />    
                </div>    
                <div class = "form_group">    
                    <label>Phone Number:</label>    
                    <input type = "text" name = "phnnum" value = "" required/>    
                </div> 
                <div class = "form_group">    
                    <label>Gender:</label>    
                    <input type = "radio" name = "gender" value = "male" /> Male   
                    <input type = "radio" name = "gender" value = "female" /> Female 
                    <input type = "radio" name = "gender" value = "other" /> Other
                </div>    
                <div class = "form_group">    
                    <label>Password:</label>    
                    <input type = "password" name = "password" value = "" required/>    
                </div>  
                <input type="submit" name="submit" value="insert">
                <input type="submit" name="submit2" value="edit">  
            </div>    
        </form>    
    </body>   

    <?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registrationform";

$link = mysqli_connect($servername, $name, $email, $gender, $phnnum, $gender, $password);

$con =mysqli_select_db($link, $dbname);
if($con){
    echo("connection success");
}
else
{
    die("connection failed".mysqli_connect_error());
}

if(isset($_POST["submit"]))
{
    mysqli_query($link,"insert into registrationform values('$_POST[name]', '$_POST[email]','$_POST[gender]','$_POST[password]')");
    echo "Record inserted";
}

if(isset($_POST["submit2"]))
{
    mysqli_query($link,"update registrationform set username= '$_POST[name]' where username= '$_POST[username]'");
}
?>
</body>
</html>

