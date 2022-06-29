<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registratio form</title>
</head>
<body>
    <Form action="database_and_edit_user.php" method="post" >

    <link href = "regformstyle.css" type = "text/css" rel = "stylesheet" />   
    
    
        <h2>Sign Up</h2>       
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
                <input type="submit" name="submit" value="submit">  
            </div>    
        </form>    
    </body>   

    <?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "regform";

$conn = new mysqli($servername, $username, $password, $dbname);

if(isset($_POST["submit"])){

    $_SESSION['submit'] = $_POST['submit'];     
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phnnum= $_POST["phnnum"];
    $gender = $_POST["gender"];
    $password = $_POST["password"];

    $sql = "insert into registrationform (name, email, phnnum, gender, password)
    values ('$name', '$email', '$phnnum', '$gender', '$password')";

    $data = mysqli_query($conn, $sql);

    if($data){
        echo "Data is successfully Inserted";
    }
    else
    {
        echo "Failed to inserted";
    }
    

}
?>
</body>
</html>

