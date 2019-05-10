<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <style type="text/css">
        table, th, td {
            border: 1px solid black;
        }
    </style>
</head>
<body>
<?php
function showTable($db_handle_name)
{
    $query = "SELECT firstname,lastname FROM auth";
    $resource = mysqli_query($db_handle_name, $query);
    echo "<p><table><tr><th>First Name</th><th>Last Name</th></tr>";
    while($row = mysqli_fetch_row($resource))
    {
        echo "<tr>";
        foreach ($row as $value)
        {
            echo "<td>".$value."</td>";
        }
        echo "</tr>";
    }
    echo "</table></p>";
}
$db_handle_name = mysqli_connect( "localhost", "webphp", "password" );
if(mysqli_select_db($db_handle_name,"finaldb"))
{
    $query = "INSERT INTO auth(username, password, firstname, lastname, email, phone) VALUES ('"
        .$_POST["username"]."','"
        .$_POST["password"]."','"
        .$_POST["firstname"]."','"
        .$_POST["lastname"]."','"
        .$_POST["email"]."','"
        .$_POST["phone"]."')";
    if(!mysqli_query ($db_handle_name, $query ))
    {
        echo "<p>The user ".$_POST["username"]." could not be added.</p>";
    }
    else
    {
        echo "<p>You are registered now.</p>";
    }
    showTable($db_handle_name);
}
else
{
    echo "<p>Couldn't connect to the database.</p>";
}
?>
</body>
</html>