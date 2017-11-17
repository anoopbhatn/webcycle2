<html>
<head>
    <title> MySQL - PHP </title>
    <link href="styles.css" rel="stylesheet" type="text/css">
</head>

<body>
    <div class="container">
        <div class="box-cont">
            <div class="box-header" style="text-align:center;">
                <h1>Search</h1>
            </div>
            <div class="box" style="text-align:center;">
                
<?php
    $db = mysqli_connect("localhost", "root", "admin123")or die("cannot connect to server"); 
    mysqli_select_db($db,"college")or die("cannot select DB");
    
    $sql = "CREATE TABLE IF NOT EXISTS `details`(`name` varchar(45), `password` varchar(45), `email` varchar(45), 
    `phone` varchar(10), `country` varchar(45), `state` varchar(45));";

    mysqli_query($db,$sql);

    $name = $_POST['name'];
    $pwd = $_POST['pwd'];
    $email = $_POST['mail'];
    $phone = $_POST['phone'];
    $count = $_POST['country'];
    $state = $_POST['state'];

    $sql="INSERT INTO `details`(name,password,email,phone,country,state) VALUES 
    ('$name','$pwd','$email',$phone,'$count','$state')";

    $result = mysqli_query($db,$sql);
    if($result){
        ?>
        Data values inserted successfully
    <?php
    }
    else{
        echo mysqli_error($db);
        ?>
                Error in inserting data values 
    <?php
    }
    ?>
            <hr>
            Enter a state to search user details of that state
            </br>
            <form action="program6_s.php" method="post">
                    <table style="text-align:center;margin:20px auto">
                        <tr>
                            <td>State:</td>
                            <td><input type="text" name="state" /></td>
                        </tr>
                        <tr>
                            <td colspan="2"><input type="submit" value="Search" /></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>
</body>

</html>