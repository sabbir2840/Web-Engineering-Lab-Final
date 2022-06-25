
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data edit</title>
</head>
<body>
    <Form action="" method="post" >

<table>
    <tr>
        <td>Name</td>
        <td><input type="text" name="name"></td>
    </tr>
    <tr>
        <td>id</td>
        <td><input type="text" name="id"></td>
    </tr>
    <tr>
        <td>age</td>
        <td><input type="text" name="age"></td>
    </tr>
    <td colspan="2">
    <input type="submit" name="submit" value="insert">
    <!-- <input type="submit" name="submit2" value="delete"> -->
    <input type="submit" name="submit3" value="Edit">
    <input type="submit" name="submit4" value="display">
    <!-- <input type="submit" name="submit5" value="search"> -->
    </td>    
</table>
    </Form>

    <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "labfinal";
$link = mysqli_connect($servername, $username, $password, $dbname);
$con =mysqli_select_db($link, $dbname);
if($con){
    echo("connection ok");
}
else
{
    die("connection failed".mysqli_connect_error());
}

if(isset($_POST["submit"]))
{
    mysqli_query($link,"insert into regedit values('$_POST[username]', '$_POST[id]','$_POST[age]')");
    echo "Record inserted";
}
if(isset($_POST["submit2"]))
{
    mysqli_query($link, "delete from regedit where username='$_POST[username]'");
    echo "Record deleted";
}
if(isset($_POST["submit3"]))
{
    mysqli_query($link,"update regedit set name= '$_POST[id]' where username= '$_POST[name]'");
}

if(isset($_POST["submit4"]))
{
    $res = mysqli_query($link, "select * from regedit");
    echo "<table border=1>";
    echo"<tr>";
    echo "<th>"; echo"name"; echo"</th>";
    echo "<th>"; echo"id"; echo"</th>";
    echo "<th>"; echo"age"; echo"</th>";
    echo"</tr>";
    while ($row = mysqli_fetch_array($res))
    {  
         echo"<tr>";
        echo "<th>"; echo $row["Name"]; echo"</th>";
        echo "<th>"; echo $row["id"]; echo"</th>";
        echo "<th>"; echo $row["Age"]; echo"</th>";
        echo"</tr>";
      
    }
    echo"</table>";

    if(isset($_POST["submit5"]))
    {
        $res= mysqli_query($link, "select * from regedit where username= '$_POST[username]'");
        echo "<table border=1>";
    echo"<tr>";
    echo "<th>"; echo"name"; echo"</th>";
    echo "<th>"; echo"id"; echo"</th>";
    echo "<th>"; echo"age"; echo"</th>";
    echo"</tr>";
    }
    while ($row = mysqli_fetch_array($res))
    {  
         echo"<tr>";
        echo "<td>"; echo $row["username"]; echo"</td>";
        echo "<td>"; echo $row["id"]; echo"</td>";
        echo "<td>"; echo $row["age"]; echo"</td>";
        echo"</tr>";
    }
    echo"</table>";

}
?>
</body>
</html>
