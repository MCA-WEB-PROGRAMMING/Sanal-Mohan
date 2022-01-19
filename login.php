<html>
    <head>
        <title>Login form</title>
    </head>
    <body>
        <form method="POST">
            Username:
            <input type="text" name="uname">
            Password:
            <input type="password" name="pass">
            <input type="submit" name="submit">
        </form>
    </body>
</html>
<?php
if(isset($_POST["submit"]))
{
    $uname=$_POST["uname"];
    $pswd=$_POST["pass"];
    $uppercase=preg_match("@[A-Z]@",$pswd);
    $lowercase=preg_match("@[a-z]@",$pswd);
    $number=preg_match("@[0-9]@",$pswd);
    if($uname=="")
    {
        echo("Enter the user name");
    }
    else if($pswd=="")
    {
        echo("Enter the password");
    }
    else if(strlen($pswd)<8)
    {
        echo("Password must be minimum 8 characters long");
    }
    else if(!$uppercase||!$lowercase||!$number)
    {
        echo("Not a strong password");
    }
    else
    {
        echo("Strong password");
    }
}