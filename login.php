<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Log in</title>
    <style type="text/css">
        table, th, td {
            border: 1px solid black;
        }
    </style>
</head>
<body>
<?php

$db_handle_name = mysqli_connect( "localhost", "webphp", "password" );
if(mysqli_select_db($db_handle_name,"finaldb"))
{
    $query = "SELECT * FROM auth WHERE username = '".$_POST["username"]."'";
    $resource = mysqli_query ($db_handle_name, $query );
    $user_found = false;
    while($row = mysqli_fetch_assoc($resource))
    {
        if($row['password'] == $_POST['password'])
        {
            $user_found = true;
            break;
        }
    }
    if($user_found)
    {
        echo  "<p>Welcome back ".$row['username']."! Login was successful</p>";
        echo "<p><table><tr><th>First Name</th><th>Last Name</th><th>Email</th><th>Phone</th></tr>";
        echo "<tr><td>".$row['firstName']
            ."</td><td>".$row['lastName']
            ."</td><td>".$row['email']
            ."</td><td>".$row['phone']
            ."</td></tr></table></p>";
    }
    else
    {
        echo "<p>Incorrect username or password</p>";
    }
}
else
{
    echo "<p>Couldn't connect to the database.</p>";
}
?>
</body>
</html>