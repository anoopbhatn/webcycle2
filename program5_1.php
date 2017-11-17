<html>

<head>
    <title> PHP Cookie Validation </title>
    <link href="styles.css" rel="stylesheet" type="text/css">
</head>
<?php
    if(!isset($_COOKIE["user1"]))
    {
        setcookie("user1","pwd1");
        setcookie("user2","pwd2");
        setcookie("user3","pwd3");
        setcookie("user4","pwd4");
    }
    
?>

<body>
    <div class="container">
        <div class="box-cont">
            <div class="box-header" style="text-align:center;">
                Login
            </div>
            <div class="box" style="text-align:center">
                Enter your credentials
                </br>
                <form action="program5_2.php" method="post">
                    <table style="text-align:center;margin:20px auto">
                        <tr>
                            <td>Name:</td>
                            <td><input type="text" name="name" /></td>
                        </tr>
                        <tr>
                            <td>Password:</td>
                            <td><input type="password" name="pwd" /></td>
                        </tr>
                        <tr>
                            <td colspan="2"><input type="submit" value="Submit" /></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>
</body>

</html>