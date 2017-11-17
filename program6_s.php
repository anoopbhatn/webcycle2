<html>

<head>
    <title> MySQL - PHP </title>
    <link href="styles.css" rel="stylesheet" type="text/css">
</head>

<body>
    <div class="container">
        <div class="box-cont">
            <div class="box-header" style="text-align:center;">
                <h1>Search Results</h1>
            </div>
            
            
            <div class="box" style="text-align:center;">
            <?php
                $st = $_POST['state'];
                print "Here are your search results for query 'state'='$st'";
            ?>
                </br>
                <table class="ntable" style="text-align:center;margin:20px auto">
                <?php
                    $db = mysqli_connect("localhost", "root", "admin123")or die("cannot connect to server"); 
                    mysqli_select_db($db,"college")or die("cannot select DB");

                    

                    $sql="SELECT * FROM `details` WHERE state='$st'";

                    $result = mysqli_query($db,$sql);
                    if($result){
                        print "<tr><td>NAME</td><td>EMAIL</td><td>PHONE</td><td>COUNTRY</td><td>STATE</td></tr>";
                        while($row = mysqli_fetch_assoc($result)){
                            print "<tr><td>".$row['name']."</td><td>".$row['email']."</td><td>"
                            .$row['phone']."</td><td>".$row['country']."</td><td>"
                            .$row['state']."</td></tr>";
                        }
                    }
                    else
                        print "Error finding persons"
                ?>

                </table>
            </div>
        </div>
    </div>
</body>

</html>