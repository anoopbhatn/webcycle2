<html>

<head>
    <title> PHP Cookie Validation </title>
    <link href="styles.css" rel="stylesheet" type="text/css">
</head>


<body>
    <div class="container">
        <div class="box-cont">
            <div class="box-header" style="text-align:center;">
                Login
            </div>
            <div class="box" style="text-align:center;">
            <?php
                $user = $_POST['name'];
                $pwd = $_POST['pwd'];
                if(isset($_COOKIE[$user])){
                    if($_COOKIE[$user] == $pwd){
                        print "<h2> Welcome $user</h1>";
                    }
                    else
                        print "<h2> You're not an authenticated user";
                }
                else
                    print "<h2> You're not an authenticated user";
                
            ?>
            </div>
        </div>
    </div>
</body>

</html>